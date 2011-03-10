<?php 
// include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';
//echo getenv('TM_SUPPORT_PATH');
// UI TEST / EXAMPLE
$UI = new UI(getenv('DIALOG'));
// $UI_TWO = new UI(getenv('DIALOG_1'));

// $UI->help();

array('id'=>'title');

$UI->requestItem();
// $UI->nib_list_clean();
// $UI_TWO->help();


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

// $response = $UI->menu(array(
//     '{title="Campaigns";header="1";}', 
//     '{title="foo";id="1";}', 
//     '{title="bar";id="2";}', 
//     '{title="zeta";id="3";}'
// ));
// var_dump($response);

// $UI->popup(array('foo','bar', 'long title'));
// $UI->popup_x(array('foo','bar', 'long title'));

// $res = `$(CocoaDialog inputbox --title "I Need Input" \
//     --informative-text "Please give me a string:" \
//     --button1 "Okay" --button2 "Cancel")`;
// 
// var_dump($res);