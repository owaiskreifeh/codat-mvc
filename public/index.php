<?php
require __DIR__.'/../vendor/autoload.php';

use App\Core\Config as Config;

if (Config::getConfig()['debug']) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}


