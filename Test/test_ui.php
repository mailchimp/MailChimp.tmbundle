<?php 
include getenv('TM_BUNDLE_PATH').DIRECTORY_SEPARATOR.'test'.DIRECTORY_SEPARATOR.'helper.php';

// UI TEST / EXAMPLE
$UI = new UI(getenv('DIALOG'));

// Simple Message
// $response = $UI->alert('Simple Message');

//More Complex
// $response = $UI->alert('Simple Message', array('title'=>'Title Here'));

//And all
// $response = $UI->alert('Simple Message', array(
//     'title'=>'Kitchen Sink',
//     'button1' => 'Button 1', 
//     'button2' => 'Button 2',
//     'alertStyle'=>'warning'
// ));


$response = $UI->menu(array(
    '{title="Campaigns";header="1";}', 
    '{title="foo";id="1";}', 
    '{title="bar";id="2";}', 
    '{title="zeta";id="3";}'
));

var_dump($response);

// $UI->popup(array('foo','bar', 'long title'));
