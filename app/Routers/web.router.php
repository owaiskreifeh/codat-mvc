<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 12:29 ص
 */


$this->map('GET',"/user/[a:user]/[a:action]",function ($user,$action){

   print_r($user);
   print_r($action);
});

$this->map("GET","/[a:user]","HomeController@index","home");
$this->map("GET","/create/[a:name]/[a:email]","HomeController@create",'create');
