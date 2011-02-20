<?php
/**
 * Checkout a copy of a campaign. v1
 *
 * @author Mitchell Amihod
 */

//Get RAW content
//so, archived view shows what it would look like on the website oi guess ?
$retval = $api->campaignContent($config->campaign_id, false);
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem getting.');

$html = $retval['html'];
$text = $retval['text'];

file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'html.html', $html);
echo 'html.html written<br>';

file_put_contents(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'text.txt', $text);
echo 'text.txt written<br>';
