<?php 
// include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';
//echo getenv('TM_SUPPORT_PATH');
// UI TEST / EXAMPLE
$UI = new UI(getenv('DIALOG'));
// $UI_TWO = new UI(getenv('DIALOG_1'));

// $UI->help();

// Example: Using Request Item
// $items = array('id'=>'title', 'id2'=>'title2');
// $selection = $UI->requestItem(array('items'=>$items));
// echo("You chose: ".$selection);
////////////////////

// Using Request Input
$user_input = $UI->input(array('title'=>'Title Here', 'prompt'=> 'Prompt User!', 'default'=>''), true);
echo("You entered: ".$user_input);
//////////////////////


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