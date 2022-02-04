<?php

session_start();
ini_set("display_errors",1);
$GLOBALS['config'] = array(
    'mysql' => array(
        'host'      => '127.0.0.1',
        'username'  => 'root',
        'password'  => 'vex1999',
        'db'        => 'supportlabs_accounts',
		'charset' => 'utf8mb4',
    ),
    'remember' => array(
        'cookie_name'   => 'hash',
        'cookie_expiry' => 604800,
    ),
    'session' => array(
        'session_name'  => 'user',
        'token_name'    => 'token',
    ),
);




spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});






?>
