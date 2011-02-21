<?php
/**
 * Template Do
 * Well, not sure yet what to do with templates
 * Whats the frequency of these sorts of operations?
 * So, roll into one for now to show what's possible,
 *
 * Hmm, a bit annoying, need to specify user/base/gallery when passing in template_id to templateInfo() 
 * Will have to rethink
 * Hardcoded to base for now
 *
 * By default, will output the 
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

$retval = $api->templates(array('user'=>false,'gallery'=>false,'base'=>true ));
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem templates do.');

// $templates = array_merge($retval['user'], $retval['base']);
$templates = $retval['base'];

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

$template_info = $api->templateInfo($template_id, 'base');
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem Template Info');

switch (true) {
    default:
        # by default, we will ust want to echo out the info $id arg we passed in
        echo $template_info[$id];
        break;
}
