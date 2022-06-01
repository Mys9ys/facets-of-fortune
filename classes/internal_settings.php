<?php
function autoloadMainClasses($class_name){
    $class_name = str_replace('\\', '/', $class_name);

    if(!@include_once $class_name . '.php'){
        die;
    }

}

spl_autoload_register('autoloadMainClasses');