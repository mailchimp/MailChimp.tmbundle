<?php
// All the required files we will need
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'escape.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'ui.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'error.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'util.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'lang.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'config.php';
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'mailchimp'.DIRECTORY_SEPARATOR.'MCAPI.class.php';

//Start up config + API object. we will need them everywhere.

$config = new mConfig(CONFIG_FILE_PATH);
$lang = new mLang(STRINGS_FILE_PATH);
$api = new MCAPI($config->api_key);
$oopsy = new ErrorHelper();
$tool = new mUtil();