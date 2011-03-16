<?php 
//generateText
// Uses generateText from api to spit out what the text version will look like.
// Right now, only set for turning an html doc into text version.
// no support for templates, url, cid options
// http://apidocs.mailchimp.com/1.3/generatetext.func.php

$data = stream_get_contents(STDIN);
if (! $data){
    echo __('error_generate_wrong_document');
    exit();
}

$retval = $api->generateText('html', $data);
$oopsy->go($api->errorCode, $api->errorMessage, __('error_generate_text_problem'));

echo $retval;
