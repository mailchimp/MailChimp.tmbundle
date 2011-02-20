<?php
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';
$config = new mConfig(getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'mc.ini');
$api = new MCAPI($config->api_key);
$retval = $api->campaigns();

var_dump($retval);
