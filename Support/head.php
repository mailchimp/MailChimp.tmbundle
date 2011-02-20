<?php
// All the required files we will need

include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'ui.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'config.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'mailchimp'.DIRECTORY_SEPARATOR.'MCAPI.class.php';

//Start up config + API object. we will need them everywhere.
$config = new mConfig(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'mc.ini');
$api = new MCAPI($config->api_key);
