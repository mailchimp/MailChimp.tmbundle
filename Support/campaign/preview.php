<?php
/**
 * Preview Archive Version of campaign
 *
 * @author Mitchell Amihod
 */

//Get RAW content
//so, archived view shows what it would look like on the website oi guess ?
$retval = $api->campaignContent($config->campaign_id, true);
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem getting Preview Archive.');

echo ('html' == $id) ? $retval['html'] : '<pre>'.$retval['text'].'</pre>';
