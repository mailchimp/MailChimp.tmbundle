<?php
/**
 * Upload current template file
 *
 * @author Mitchell Amihod
 */
$filename = getenv('TM_FILENAME');
if( false === strpos($filename, '.html') ) {
    $oopsy->go(999, __('error_template_upload_wrong_file'));
}

$content = file_get_contents(getenv('TM_FILEPATH'));

$retval = $api->templateUpdate($config->template_id, array('html'=>$content));
$oopsy->go($api->errorCode, $api->errorMessage, sprintf(__('error_template_upload_update'), $filename));

//Don't bother with retval, since oopsy will catch error.