<?php 
/**
 * Create a new template
 *
 * @package mailchimp.tmbundle
 * @author Mitchell Amihod
 **/
$filename = getenv('TM_FILENAME');

if( false === strpos($filename, '.html') ) {
    $oopsy->go(999, "Wrong file for upload: .html only");
}

$content = file_get_contents(getenv('TM_FILEPATH'));
$new_template_id = $api->templateAdd($id, $content);
$oopsy->go($api->errorCode, $api->errorMessage, "Problem adding template: {$filename}");

$config->template_id = $new_template_id;
$config->save();

echo "Saved and switched to new template.";