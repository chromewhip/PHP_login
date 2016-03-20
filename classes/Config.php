<?php

class Config {
    // set as null to check if path exists
    public static function get($path = null) {
        //create variable to store config 
        if($path) {
            //defines where config comes from
            //seperates by '/'
            $config = $GLOBALS['config']; 
            $path = explode('/', $path);

            foreach($path as $bit) {
                //if config is set, set config to bit
                //i.e config = remember
                //checks against the bit aka cookie_name
                if(isset($config[$bit])) {
                    $config = $config[$bit];
                }
            }

            return $config;
        }
        //if path doesn't exsists return false 
        return false;
    }
}
