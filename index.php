<?php
require 'vendor/autoload.php';

$GLOBALS['admin'] = 1;

$container = new League\Container\Container;
$foo = $container->get('App\Controllers\AdminBookController');
