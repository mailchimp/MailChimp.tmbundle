<?php
/**
 * List available Templates
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$retval = $api->templates(array('user'=>true,'gallery'=>false,'base'=>true ));
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem templates.');

$templates = array_merge($retval['user'], $retval['base']);

$collector = array();
foreach($templates as $template){
    $temp = '{title="%s";id="%s";}';
    $collector[] = sprintf($temp, $template['name'], $template['id']);
}

$response = $UI->menu($collector);

if(empty($response)) {
    exit( 'Cancelled.');
}

$xml = new SimpleXMLElement($response);

$template_id = $tool->getValue($xml, 'id');

var_dump($template_id);

// for ($i=0; $i < count($xml->dict->key); $i++) { 
//     if('campaign_id' == $xml->dict->key[$i]) {
//         $config->campaign_id = $xml->dict->string[$i];
//     }
//     if('list_id' == $xml->dict->key[$i]) {
//         $config->list_id = $xml->dict->string[$i];
//     }
// }

var_dump($templates);