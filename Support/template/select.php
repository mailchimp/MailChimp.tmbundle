<?php
/**
 * Template Select
 * 
 * Only offers User Templates, sets the template_id for the project
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
    $temp = '{title="%s";id="%s";}';
    //Ok, having some issues trying to do replacement on the '
    //Tried escaping it, no luck. Even though its in a quoted string. 
    //So, rather than burn hours trying to solve this right now, we can come back to it if its an issue. 
    $tName = str_replace("'", "", $template['name']);
    $collector[] = sprintf($temp, $tName, $template['id']);
}

$response = $UI->menu($collector);

if(empty($response)) {
    exit();
}

$xml = new SimpleXMLElement($response);
$template_id = $tool->getValue($xml, 'id');

$template_info = $api->templateInfo($template_id, $template_type);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_select_info'));

//Then we should write out the template id 
$config->template_id = $template_id;
$config->save();

echo $template_info['source'];
