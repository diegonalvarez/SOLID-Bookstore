<?php
require 'vendor/autoload.php';

$container = new League\Container\Container;
$foo = $container->get('App\Controllers\AdminBookController');
