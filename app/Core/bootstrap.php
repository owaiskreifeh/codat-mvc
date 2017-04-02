<?php


//ELOQUENT bootstrap
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(\App\Core\Config::getDatabaseConfig());
$capsule->setAsGlobal();
$capsule->bootEloquent();



//ROUTER bootstrap
$router = new \App\Core\Router();
$router->run();
