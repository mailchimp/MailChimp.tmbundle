<?php
/**
* Class to manage string files.
* Minimal Feature set
* Puts the strings in $_ENV['MC']['STRINGS'] so we can use __('') to output
*/

//Return the string from $_ENV['MC']['STRINGS'] or $key
function __($key) {
    return (isset($_ENV['MC']['STRINGS'][$key])) ? $_ENV['MC']['STRINGS'][$key] : $key;
}

class mLang {

    function __construct($file) {
        $_ENV['MC']['STRINGS'] = $this->load($file);
    }

    /**
     * Load the config file
     *
     * @return array
     **/
    public function load($file) {
        return parse_ini_file($file);
    }

}
