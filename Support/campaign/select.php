<?php
/**
 * Switch your config to a different campaign
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$retval = $api->campaigns(array('status'=> 'save'));
$oopsy->go($api->errorCode, $api->errorMessage, 'error_select');
$campaigns = $retval['data'];

//Array indexed by title. not ideal (would rather id) 
// but i dont see a way with the requestItem nib how to pass extra data
// We will encounter problems if campaigns can have the same name :/ - make more intelligent
$campHash = array();
foreach($campaigns as $campaign){
    $campHash[str_replace("'", "", $campaign['title'])] = array(
        'title'=>$campaign['title'],
        'list_id' => $campaign['list_id'],
        'campaign_id' => $campaign['id'],
        'content_type' => $campaign['content_type']
    );
}

$response = $UI->requestItem(array(
    'items'=>array_keys($campHash),
    'title' => __('modal_select_title'),
    'prompt' => __('modal_select_prompt')
));

if(empty($response)) {
    exit('Cancelled.');
}

if('template' == $campHash[$response]['content_type']) {
    echo __('error_template_no_support');
    exit();
}

$config->campaign_id = $campHash[$response]['campaign_id'];
$config->list_id = $campHash[$response]['list_id'];

$config->save();
