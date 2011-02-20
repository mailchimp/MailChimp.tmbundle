<?php
// All the required files we will need

include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'config.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'ui.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'error.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'mailchimp'.DIRECTORY_SEPARATOR.'MCAPI.class.php';

//Start up config + API object. we will need them everywhere.
$config = new mConfig(CONFIG_FILE_PATH);
$api = new MCAPI($config->api_key);
$oopsy = new ErrorHelper();