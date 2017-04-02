<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 03:57 م
 */

namespace App\Controllers;

use App\Core\Config;
use App\Core\View;
use App\Models\User;

class HomeController
{
    public function index($user){
//        echo __ROOT__.'app/Views';
        $View = new View();
        $View->view("home.twig",[
           'username' => $user,
            'title' => Config::getConfig()['app_name']
        ]);
    }

    public function create($name,$email){
        $u = new User();
       $u->create(['name'=>$name,'email'=>$email]);
    }
}