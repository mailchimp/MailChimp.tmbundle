<?php
// How init works:
// Config will trigger the Init if it finds it has no API Key available.
// This is just simple when someone wants to run init explicitly
// basically a bit of sleight of hand.

$welcome_file = getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'locale'.DIRECTORY_SEPARATOR.'eng_init.html';
echo sprintf(file_get_contents($welcome_file), $config->api_key);