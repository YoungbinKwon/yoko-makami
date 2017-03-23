<?php

define('ROOT_PATH', realpath(dirname(__FILE__)));

$includes = array(ROOT_PATH . '/Lib/db', ROOT_PATH . '/Lib/util', ROOT_PATH . '/Lib/mvc', ROOT_PATH . '/Model');
$incPath = implode(PATH_SEPARATOR, $includes);
set_include_path(get_include_path() . PATH_SEPARATOR . $incPath);

function __autoload($className){
    if (stream_resolve_include_path($className . ".php")) {
        require_once $className . ".php";
    }
}

$dispatcher = new Dispatcher();
$dispatcher->dispatch();
