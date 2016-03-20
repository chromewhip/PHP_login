<?php 
require_once 'core/init.php';

var_dump(class_exists('Config'));
echo Config::get('remember/cookie_name'); 