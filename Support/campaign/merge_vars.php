<?php
// Get and Display merge vars, allow user to insert them through menu?
$UI = new UI(getenv('DIALOG'));

$mergevars = $api->listMergeVars($config->list_id);
$oopsy->go($api->errorCode, $api->errorMessage, 'Unable to get list merge vars!');

$mList = array();
foreach ($mergevars as $mvar) {
    $mList[] = array('display'=>$mvar['name'], 'insert'=>$mvar['tag']);
}

$UI->popup($mList);

