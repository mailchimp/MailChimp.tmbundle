<?php
/**
 * Switch your config to a different campaign
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$retval = $api->campaigns();
$oopsy->go($api->errorCode, $api->errorMessage, 'Unable to get list of Campaign!');
$campaigns = $retval['data'];

//pull out campaign info, prep it for TM 
$collector = array();
foreach($campaigns as $campaign){
    $temp = '{title="%s";campaign_id="%s";list_id="%s";}';
    $collector[] = sprintf($temp, $campaign['title'], $campaign['id'], $campaign['list_id']);
}

$response = $UI->menu($collector);

if(empty($response)) {
    exit( 'Cancelled.');
}

//@todo refactor this - some helper method to extract value/keys??
$xml = new SimpleXMLElement($response);

$config->campaign_id = $tool->getValue($xml, 'campaign_id');
$config->list_id = $tool->getValue($xml, 'list_id');

$config->save();
