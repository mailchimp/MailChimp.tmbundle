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

$template_type = $UI->requestItem(array('items'=>array_keys($template_options)));
if(empty($template_type)) { exit(); }

$template_options[$template_type] = true;
////////End Template Type User Choice Selection
$retval = $api->templates($template_options);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_fetch'));

$templates = $retval[$template_type];

$collector = array();
foreach($templates as $template){
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

if(empty($response)) { exit(); }

$template_id = $collector[$response]['template_id'];
$template_info = $api->templateInfo($template_id, $template_type);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_template_info'));

echo $template_info[$id];
