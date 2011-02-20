<?php
/**
 * Checkout a copy of a campaign. v1
 *
 * @author Mitchell Amihod
 */

//Get RAW content
$retval = $api->campaignContent($config->campaign_id, true);

$oopsy->go($api->errorCode, $api->errorMessage, 'Problem getting.');


// var_dump($retval);