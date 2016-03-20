<?php

//takes in the string, universalize quotes(singlevsdouble)
//set encoding to UTF-8
function escape($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8 ');
}