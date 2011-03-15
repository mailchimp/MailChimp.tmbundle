<?php
/**
 * Checkout a copy of a campaign. v1
 *
 * @author Mitchell Amihod
 */

//Get RAW content
//so, archived view shows what it would look like on the website oi guess ?
$retval = $api->campaignContent($config->campaign_id, false);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_campaign_get'));

$html = $retval['html'];
$text = $retval['text'];

file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.HTML_NAME, $html);
echo HTML_NAME.' written<br>';

file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.TEXT_NAME, $text);
echo TEXT_NAME.' written<br>';
