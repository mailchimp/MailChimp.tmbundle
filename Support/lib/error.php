<?php

/**
* Error Helper
* To be expanded on if there is a need.
*/
class ErrorHelper {

    /**
     * Handles Error. 
     * Output error,
     * stop script execution
     *
     * @param int $code MC Error code
     * @param string $message MC Error message 
     * @param string $custom Custom message to include in the event of error. 
     * @return void
     **/
    public function go($code, $message, $custom = false) {
        if(empty($code)) { return; }

        if($custom) {
            echo "{$custom}";
            exit();
        }
        
    	echo "Code={$code}<br>";
    	echo "Msg={$message}<br>";
        exit();
    }

}
