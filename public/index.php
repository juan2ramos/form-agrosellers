<?php
date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


require_once '../vendor/autoload.php';
require(__DIR__.'/../src/helpers.php');
require(__DIR__.'/../bootstrap/Start.php');

new Start(@explode("/", $_GET['url']));






