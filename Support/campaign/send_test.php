<?php
// Send a test email.
$UI = new UI(getenv('DIALOG'));

//First, check that they have a campaign set:
if(is_null($config->campaign_id)) {
    $oopsy->go(999, __('error_no_campaign'));
}

$email_address = $UI->input(array(
    'title'=>__('modal_request_email_address_title'), 
    'prompt'=>__('modal_request_email_address_prompt')
));

if(empty($email_address)) { exit(); }

$retval = $api->campaignSendTest($config->campaign_id, array($email_address));
$oopsy->go($api->errorCode, $api->errorMessage, __('error_send_test'));

if(true == $retval) {
    echo __('test_sent_to') . " $email_address";
} else {
    echo __('error_send_test');
}
    
