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


$this->map("GET","/hello/[a:user]","HomeController@index","home");