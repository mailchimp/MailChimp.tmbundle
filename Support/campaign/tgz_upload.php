<?php
/**
 * tgz_upload
 *
 * Will tgz up the contents of the folder (minus the exclusion list)
 * and then upload.
 *
 * doc: Use with care! it WILL blow away what you have there. 
 *      Don't assign to hotkey - too potentially destructive
 *
 */

$to_tar = getenv('TM_PROJECT_DIRECTORY');
$tar_file = sys_get_temp_dir().DIRECTORY_SEPARATOR.'mc_to_upload.tgz';

// Pipe to dev null, since we don't care about the results from the tar
$tar_cmd = "tar --exclude-from='".TAR_EXCLUSION_LIST."' -cvzf {$tar_file} '{$to_tar}' &> /dev/null &";

exec($tar_cmd);

$content_to_upload = base64_encode(file_get_contents($tar_file));

$retval = $api->campaignUpdate($config->campaign_id, 'content', array('archive'=>$content_to_upload, 'archive_type'=>'tgz'));
$oopsy->go($api->errorCode, $api->errorMessage, __('error_uploading_tgz').$tar_file);
