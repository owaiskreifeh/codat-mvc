<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 03:57 م
 */

namespace app\Controllers;


class HomeController
{
    public function index($user){
        echo "Hello $user in HomeController@index";
    }
}