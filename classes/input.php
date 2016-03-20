<?php
class Input {
    //default to post, unless we specifiy get
    //CHECKS if input is empty
    public static function exists($type = 'post') {
        switch($type) {
            case 'post':
                return (!empty($_POST)) ? true : false;
            break;
            case 'get':
                return (!empty($_GET)) ? true : false;
            break;
            deault:
                return false;
            break;
        }
    }
    public static function get($item) {
        if(isset($_POST[$item])){
            return $_POST[$item];
        } else if(isset($_GET[$item])) {
            return $_GET[$item];
        }
        //return empty string to prevent errors
        return '';
    }
    
}