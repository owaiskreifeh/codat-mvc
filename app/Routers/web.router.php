<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 12:29 ص
 */


use App\Core\Config;// Your Config
use App\Core\View;

$this->map('GET|POST',"/",function ($name=''){

    $View = new View();
    $View->view("home.twig",[
        'title' => Config::getConfig()['app_name'],
        'name' => $name
    ]);
});

$this->map("GET","/[a:user]","HomeController@index","home");
$this->map("GET","/create/[a:name]/[a:email]","HomeController@create",'create');
