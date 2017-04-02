<?php
//CLI test : //$_SERVER['REQUEST_URI'] = "/create/UserTest/usertestsemail";
define("__ROOT__",__DIR__ . '/../');
require __DIR__.'/../vendor/autoload.php';
require __DIR__ . '/../app/Core/bootstrap.php';
use App\Core\Config as Config;

if (Config::getConfig()['debug']) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    echo "</pre>";
}

