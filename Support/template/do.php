<?php
/**
 * Template Do
 * 
 * I think this is an infrequent enough operation that its not onerous to have to pick from more than one menu.
 *
 * @author Mitchell Amihod
 */
$UI = new UI(getenv('DIALOG'));

//Begin Template Type Selection
$template_options = array('user'=>false, 'gallery'=>false,'base'=>false );
$temp_choices = array();
foreach (array_keys($template_options) as $temp_type) {
    $temp = '{title="%s";id="%s";}';
    $temp_choices[] = sprintf($temp, ucfirst($temp_type), $temp_type);
}
$response = $UI->menu($temp_choices);
if(empty($response)) { exit(); }

$xml = new SimpleXMLElement($response);
$template_type = $tool->getValue($xml, 'id');
$template_options[$template_type] = true;
////////End Template Type User Choice Selection
$retval = $api->templates($template_options);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_fetch'));

$templates = $retval[$template_type];

$collector = array();
foreach($templates as $template){
    $temp = '{title="%s";id="%s";}';
    $tName = str_replace("'", "", $template['name']);
    $collector[] = sprintf($temp, $tName, $template['id']);
}

$response = $UI->menu($collector);

if(empty($response)) { exit(); }

$xml = new SimpleXMLElement($response);
$template_id = $tool->getValue($xml, 'id');

$template_info = $api->templateInfo($template_id, $template_type);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_info'));

echo $template_info[$id];
