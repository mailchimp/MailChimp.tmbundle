<?php
/**
 * Switch your config to a different campaign
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$retval = $api->campaigns(array('status'=> 'save'));
$oopsy->go($api->errorCode, $api->errorMessage, 'Unable to get list of Campaign!');
$campaigns = $retval['data'];

//pull out campaign info, prep it for TM 
$collector = array();

//Array indexed by title. not ideal (would rather id) 
// but i dont see a way with the requestItem nib how to pass extra data
// We will encounter problems if campaigns can have the same name :/
$campHash = array();
foreach($campaigns as $campaign){
    $campHash[$campaign['title']] = array(
        'title'=>$campaign['title'],
        'list_id' => $campaign['list_id'],
        'campaign_id' => $campaign['id']
    );
}

$response = $UI->requestItem(array(
    'items'=>array_keys($campHash),
    'title' => 'MailChimp: Select Campaign',
    'prompt' => 'Choose a Campaign to switch to.'
));

if(empty($response)) {
    exit( 'Cancelled.');
}

$config->campaign_id = $campHash[$response]['campaign_id'];
$config->list_id = $campHash[$response]['list_id'];

$config->save();
