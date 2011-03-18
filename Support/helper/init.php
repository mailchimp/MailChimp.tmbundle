<?php
// How init works:
// Config will trigger the Init if it finds it has no API Key available.
// This is just simple when someone wants to run init explicitly
// $config->init();
echo sprintf(__('init_success_message'), $config->api_key);