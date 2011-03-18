<?php
/**
 * Template Select
 * 
 * Only offers User Templates, sets the template_id for the project, and echos the template out 
 *
 * @author Mitchell Amihod
 */
$UI = new UI(getenv('DIALOG'));

$template_type = 'user';
$template_options = array('user'=>true,'gallery'=>false,'base'=>false );
$retval = $api->templates($template_options);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_select_fetch'));

$templates = $retval[$template_type];

$collector = array();
foreach($templates as $template){
    //Ok, having some issues trying to do replacement on the '
    //Tried escaping it, no luck. Even though its in a quoted string. 
    //So, rather than burn hours trying to solve this right now, we can come back to it if its an issue. 
    $tName = str_replace("'", "", $template['name']);
    $collector[$tName] = array(
        'title' => $tName, 
        'template_id' => $template['id']
    );
}

$response = $UI->requestItem(array(
    'items'=>array_keys($collector),
    'title' => __('modal_template_select_title'),
    'prompt' => __('modal_template_select_prompt')
));

if(empty($response)) {
    exit();
}

$template_id = $collector[$response]['template_id'];

$template_info = $api->templateInfo($template_id, $template_type);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_select_info'));

//Then we should write out the template id 
$config->template_id = $template_id;
$config->save();

echo $template_info['source'];
