<?php
/**
 * Checkout a copy of a campaign. v1
 *
 * @author Mitchell Amihod
 */

$config = new mConfig(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'mc.ini');

$api = new MCAPI($config->api_key);
$UI = new UI(getenv('DIALOG'));

$retval = $api->campaigns();

if ($api->errorCode){
	echo "Unable to Pull list of Campaign!";
	echo "\n\tCode=".$api->errorCode;
	echo "\n\tMsg=".$api->errorMessage."\n";
} else {
    //pull out campaign info, prep it for TM 
    $collector = array();
    foreach($retval['data'] as $campaign){
        $temp = '{title="%s";campaign_id="%s";}';
        $collector[] = sprintf($temp, $campaign['title'], $campaign['id']);
    }
    
    $response = $UI->menu($collector);
    
    if(empty($response)) {
        exit( 'Cancelled.');
    }

    $xml = new SimpleXMLElement($response);

    for ($i=0; $i < count($xml->dict->key); $i++) { 
        if('campaign_id' == $xml->dict->key[$i]) {
            $config->campaign_id = $xml->dict->string[$i];
        }
    }
    
    $config->save();
}

