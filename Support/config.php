<?php
//Some project specific defines
define('HTML_NAME', 'html.html');
define('TEXT_NAME', 'text.txt');
define('CONFIG_FILE_PATH', getenv('TM_PROJECT_DIRECTORY').DIRECTORY_SEPARATOR.'mc.ini');

// Used for the tgz-ing up of the files for upload. Tells the tar command what files to exclude.
define('TAR_EXCLUSION_LIST', getenv('TM_BUNDLE_SUPPORT').DIRECTORY_SEPARATOR . 'tar_exclusion_list.txt');

/**
* mConfig
*
* load up any needed configs
* save any needed configs
*
* Using phpini files
*
* @todo fallback to API_KEY in project/application env var
*       this will allow for using commands like inlineCSS from outside of MC only projects,
*       which, if nothing else, might lead to people giving MC a shot even if 
*       they are happy where they are now.
*/
class mConfig {
    
    var $ini_path = null;

    //These get set on load of the .ini file.
    var $api_key = null;
    var $campaign_id = null;
    var $list_id = null;
    
    // Currently useful in the context of working with Templates - not campaigns.
    var $template_id = null;
    
    function __construct($path) {

        if(!file_exists($path)) {
            trigger_error("Missing config file: {$path}", E_USER_ERROR);
            exit();
        }
        
        $this->ini_path = $path;
        $this->load();
    }
    
    
    /**
     * Write the .ini back
     *
     * @return void
     **/
    public function save() {
        $to_write = array('api_key', 'campaign_id', 'list_id', 'template_id');
        $output = '';
        foreach ($to_write as $key) {
            if(is_null($this->{$key})) { continue; }
            $output.= $this->_ini_line($key, $this->{$key}, true);
        }
        
        file_put_contents($this->ini_path, $output);
        
    }
    
	/**
	 * create the ini line
	 *
	 * @return string
	 **/
	function _ini_line($key, $value, $newline = false) {

		$line = trim($key).'="'. str_replace('"', '&quot;', $value) .'"';

		if($newline) {
			$line .= "\n";
		}

		return $line;
	}
    
    
    /**
     * Load the config file
     *
     * @return void
     **/
    public function load() {
        $settings = parse_ini_file($this->ini_path);
        foreach ($settings as $key => $value) {
            $this->{$key} = $value;
        }
    }

}
