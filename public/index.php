<?php
date_default_timezone_set("America/Bogota");
error_reporting(E_ALL ^ E_NOTICE);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


require_once '../vendor/autoload.php';
require(__DIR__.'/../src/helpers.php');
require(__DIR__.'/../bootstrap/Start.php');

new Start(@explode("/", $_GET['url']));






