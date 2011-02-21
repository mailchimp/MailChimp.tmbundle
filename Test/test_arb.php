<?php
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';

$retval = $api->templates(array('user'=>false,'gallery'=>false,'base'=>true ));
var_dump($retval);