<?php 
/**
 * Open the Template Page in the default Browser
 **/

$domain = explode('-', $config->api_key);
$tUrl = sprintf('https://%1$s.admin.mailchimp.com/templates/edit?id=%2$s', $domain[1], $config->template_id);
`open $tUrl`;