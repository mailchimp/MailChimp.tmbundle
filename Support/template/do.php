<?php
/**
 * Template Do
 * Well, not sure yet what to do with templates
 * Whats the frequency of these sorts of operations?
 * So, roll into one for now to show what's possible,
 *
 * Hmm, a bit annoying, need to specify user/base/gallery when passing in template_id to templateInfo() 
 * 
 * I think this is an infrequent enough operation that its not onerous to have to pick from more than one menu.
 *
 * @author Mitchell Amihod
 */

$UI = new UI(getenv('DIALOG'));

//Begin Template Type Selection
$template_options = array('user'=>false,'gallery'=>false,'base'=>false );

$temp_choices = array();
foreach (array_keys($template_options) as $temp_type) {
    $temp = '{title="%s";id="%s";}';
    $temp_choices[] = sprintf($temp, ucfirst($temp_type), $temp_type);
}
$response = $UI->menu($temp_choices);
if(empty($response)) {
    exit( 'Cancelled.');
}
$xml = new SimpleXMLElement($response);
$template_type = $tool->getValue($xml, 'id');
$template_options[$template_type] = true;
////////End Template Type User Choice Selection

$retval = $api->templates($template_options);
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem templates do.');

// $templates = array_merge($retval['user'], $retval['base']);
$templates = $retval[$template_type];

$collector = array();
foreach($templates as $template){
    $temp = '{title="%s";id="%s";}';
    //Ok, having some issues trying to do replacement on the '
    //Tried escaping it, no luck. Even though its in a quoted string. 
    //So, rather than burn hours trying to solve this right now, we can come back to it if its an issue. 
    $tName = str_replace("'", "", $template['name']);
    $collector[] = sprintf($temp, $tName, $template['id']);
}

$response = $UI->menu($collector);

if(empty($response)) {
    exit( 'Cancelled.');
}

$xml = new SimpleXMLElement($response);
$template_id = $tool->getValue($xml, 'id');

$template_info = $api->templateInfo($template_id, $template_type);
$oopsy->go($api->errorCode, $api->errorMessage, 'Problem Template Info');

switch (true) {
    default:
        # by default, we will ust want to echo out the info $id arg we passed in
        echo $template_info[$id];
        break;
}
