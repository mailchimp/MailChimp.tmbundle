<?php

/**
* Collection of utils for bundle writing
*/
class mUtil {

    /**
     * Used for specific caseof extracting a value for a key from Textmate UI XML response
     * XML is not my strong point, but it works :/
     * @param object $xml SimpleXML element
     * @param string $key 
     * @param string $default if not found, returns this
     *
     * @return string
     **/
    function getValue($xml, $key, $default = null) {

        for ($i=0; $i < count($xml->dict->key); $i++) { 
            if($key == $xml->dict->key[$i]) {
                return (string)$xml->dict->string[$i];
            }
        }
        
        return $default;
    }

}
