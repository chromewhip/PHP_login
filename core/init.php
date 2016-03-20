<?php
session_start();
//sets up db and cookies
$GLOBALS['config'] = array (
                            'mysql' => array(),
                            'remember' => array(
                                                'cookie_name' => 'hash', 
                                                'cookie_expiry' => 604800
                                                ),
                            'session' => array(
                                               'session_name' => user)
                        );

spl_autoload_register(function() {
    
});
