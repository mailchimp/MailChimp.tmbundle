<?php
include getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR.'head.php';

$exclusion_list = getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR . 'tar_exclusion_list.txt';

$to_tar = getenv('TM_PROJECT_DIRECTORY');

// echo sys_get_temp_dir();
// $tar_destination = tempnam(string dir, string prefix)
$tar_file = sys_get_temp_dir().DIRECTORY_SEPARATOR.'mc_to_upload.tgz';

$tarcmd = "tar --exclude-from='{$exclusion_list}' -cvzf {$tar_file} {$to_tar}";

//exec the command
echo `$tarcmd`;

$content = base64_encode(file_get_contents($tar_file));

// $handle = fopen($tar_file, "r");

// $content_binary = fread(fopen($imgfile, "r"), filesize($imgfile));

// $content = fread(fopen($imgfile, "r"), filesize($imgfile));

// echo '<img src="data:image/gif;base64,' . base64_encode($imgbinary) . '" />';

$retval = $api->campaignUpdate($config->campaign_id, 'content', array('archive'=>$content, 'archive_type'=>'tgz'));
var_dump($retval);
$oopsy->go($api->errorCode, $api->errorMessage, "Problem uploading {$tar_file}");



// We will declare a special directory: _local - this is where you can keep any notes, work, etc
// it will be skipped when we upload the folder
// tar --exclude="_local" -cvzf test_zip_tar.tgz test_to_zip
//$zipresult = `tar -cvzf test_zip_tar.tgz test_to_zip`;