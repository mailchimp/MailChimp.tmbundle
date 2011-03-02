<?php
/**
 * Get info on current campaign
 *
 **/
$retval = $api->campaigns(array('campaign_id'=>$config->campaign_id));

if(false == $retval) {
    echo "I'm sorry, but it seems there is a problem with getting info about this campaign.".
            "<br>Are you sure you have setup your config?";
    return;
}

$ignoreFields = array('tracking', 'segment_opts', 'segment_text', 'type_opts' );
$outputT = '<b>%1$s</b>: %2$s <br>';
$linkT = '<a href="javascript:TextMate.system(\'open %1$s\', null)">%1$s</a>';
$collector = array();
foreach ($retval['data'][0] as $key => $value) {
    if(in_array($key, $ignoreFields)) { continue; }
    
    //Some transform
    if('archive_url' == $key) {
        $value = sprintf($linkT, $value);
    }
    
    $collector[] = sprintf($outputT, $key, $value);
}

echo '<h2>Campaign Info</h2>';
echo implode('', $collector);