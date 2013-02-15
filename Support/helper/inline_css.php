<?php 
//Turn the current document into inline CSS.
//Leaves the original style tags alone
$data = stream_get_contents(STDIN);;
if (! $data){
    echo __('error_inline_css');
    exit();
}

//@todo use $oopsy here.
$retval = $api->inlineCss($data);
echo $retval;
