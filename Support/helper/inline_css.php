<?php 
//Turn the current document into inline CSS.
//Leaves the original style tags alone
$data = '';
while ($tmp = fread(STDIN, 1000)) {$data .= $tmp;}
if (! $data){
    echo "Nothing to work on. You sure you in the right document?";
    exit();
}

$retval = $api->inlineCss($data);
echo $retval;
