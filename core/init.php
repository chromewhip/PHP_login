<?php
session_start();
//sets up db and cookies
$GLOBALS['config'] = array (
                            'mysql' => array(
                                             'host' => '127.0.0.1'
                                             ),
                            'remember' => array(
                                                'cookie_name' => 'hash', 
                                                'cookie_expiry' => 604800
                                                ),
                            'session' => array(
                                               'session_name' => user)
                        );

//creates the library of classes to autoload from
//i.e '$db= new DB();'' will have DB required by this 
//function
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

//can't use spl because it's not a class
require_once 'functions/sanitize.php';