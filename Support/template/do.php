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
// user, gallery, base
$template_types = array('My Templates'=>false, 'Template Gallery'=>false,'Start From Scratch'=>false );

$template_type = $UI->requestItem(array(
    'items'=>array_keys($template_types),
    'title'=>__('modal_select_template_type_title'),
    'prompt'=>__('modal_select_template_type_prompt')
));

if(empty($template_type)) { exit(); }

//Set the one we will be interested in to true, then we map the values to the 
//actual keys we pass to MC
$template_types[$template_type] = true;

$template_options = array_combine(array('user', 'gallery','base'), $template_types);

//Convert Template Type to the proper MC recognized type
//We know only one item can be true, so use that.
$template_type = array_search(true, $template_options, true);

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
