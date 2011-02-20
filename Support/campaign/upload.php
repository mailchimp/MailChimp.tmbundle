<?php
/**
 * Upload current file
 *
 * @author Mitchell Amihod
 */

if( ( getenv('TM_FILENAME') != HTML_NAME ) && (getenv('TM_FILENAME') != TEXT_NAME)) {
    $oopsy->go(999, "Wrong file for upload.");
}

$retval = $api->campaignUpdate($config->campaign_id, 'content', array('text'=>'foooo'));


var_dump($retval);
// echo getenv('TM_FILENAME');
// echo getenv('TM_FILEPATH');

//Get RAW content
//so, archived view shows what it would look like on the website oi guess ?
// $retval = $api->campaignContent($config->campaign_id, false);
// $oopsy->go($api->errorCode, $api->errorMessage, 'Problem getting.');
// 
// $html = $retval['html'];
// $text = $retval['text'];
// 
// file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.HTML_NAME, $html);
// echo HTML_NAME.' written<br>';
// 
// file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.TEXT_NAME, $text);
// echo TEXT_NAME.' written<br>';
