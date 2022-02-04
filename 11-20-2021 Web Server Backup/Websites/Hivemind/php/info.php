<?php
$GLOBALS['host'] = "127.0.0.1";
$GLOBALS['username'] = "root";
$GLOBALS['password'] = "vex1999";
$GLOBALS['charset'] = "utf8mb4";

ini_set('display_errors', 1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


spl_autoload_register(function($class)
{
	require "Classes/".$class.".php";
}
)


?>