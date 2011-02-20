<?php
/**
 * Upload current file
 *
 * @author Mitchell Amihod
 */
$filename = getenv('TM_FILENAME');
if( ( $filename != HTML_NAME ) && ($filename != TEXT_NAME)) {
    $oopsy->go(999, "Wrong file for upload.");
}

//So, we're good to go - lets grab the type 
$type = explode('.',$filename);
$type = $type[0];

$content = file_get_contents(getenv('TM_FILEPATH'));

$retval = $api->campaignUpdate($config->campaign_id, 'content', array($type=>$content));
$oopsy->go($api->errorCode, $api->errorMessage, "Problem uploading {$filename}");

//Don't bother with retval, since oopsy will catch error.