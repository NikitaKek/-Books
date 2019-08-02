<?php
require_once ('Routes.php');


/**
 * @param $class_name
 */
function __autoload($class_name)
{
        if(file_exists('classes/'.$class_name.'.php')) {
            require_once('classes/' . $class_name . '.php');
        } elseif (file_exists('controllers/'.$class_name.'.php')) {
            require_once('controllers/' . $class_name . '.php');
        }  elseif (file_exists('Service/'.$class_name.'.php')) {
            require_once('Service/' . $class_name . '.php');
        }
}

