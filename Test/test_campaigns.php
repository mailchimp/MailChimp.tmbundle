<?php
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';
$retval = $api->campaigns();
var_dump($retval);
