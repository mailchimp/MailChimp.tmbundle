<?php 
/**
 * Create a new template
 *
 * @package mailchimp.tmbundle
 * @author Mitchell Amihod
 **/
$UI = new UI(getenv('DIALOG'));

$filename = getenv('TM_FILENAME');

if( false === strpos($filename, '.html') ) {
    $oopsy->go(999, __('error_template_new_wrong_file'));
}
$new_name = $UI->input(array(
    'title'=>__('modal_template_new_title'), 
    'prompt'=>__('modal_template_new_prompt')
));

$content = file_get_contents(getenv('TM_FILEPATH'));
$new_template_id = $api->templateAdd($new_name, $content);
$oopsy->go($api->errorCode, $api->errorMessage, sprintf(__('error_template_new_adding'), $filename));

$config->template_id = $new_template_id;
$config->save();

echo __('template_new_success');