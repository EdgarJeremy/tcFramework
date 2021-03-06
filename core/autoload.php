<?php

function loader($classname) {
    if(file_exists("app/basepoints/{$classname}.php")) {
        require_once "app/basepoints/{$classname}.php";
    } elseif(file_exists("app/models/{$classname}.php")) {
        require_once "app/models/{$classname}.php";
    } elseif(file_exists("core/classes/{$classname}.php")) {
        require_once "core/classes/{$classname}.php";
    } elseif(file_exists("core/libraries/sub/{$classname}.php")) {
        require_once "core/libraries/sub/{$classname}.php";
    }
}

spl_autoload_register("loader");