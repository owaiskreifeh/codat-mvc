<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 01/04/17
 * Time: 01:22 م
 */

namespace App\Core;

class Router extends \AltoRouter
{

//    protected $controller = "HomeController";
//    protected $action = "index";
//    protected $params = [];



    private function requireRoutersFiles(){
        chdir(__ROOT__."app/Routers");
        $routers = glob("*.router.php");
        foreach ($routers as $router){
            require $router;
        }
    }

    private function explodeTarget($target){
        //$target = "homeController@index"
        return explode("@",$target);
        //Array[0] : 'homeController'
        //Array[1] : 'index'
    }

    private function callController($controller){
        if (class_exists("App\\Controllers\\". $controller)){
            $controller = "App\\Controllers\\". $controller;
            return new $controller;
        }
        return false;
    }

    private function callMethod($controller,$method,$params){
        if (is_callable([$controller,$method])){
            $this->action = $method;
            return call_user_func_array([
                           $controller,
                            $method],
                            $params);
        }
        return false;
    }
    /*
     *
     *
     * */
    public  function run(){
        $this->emailRegEX();
        $this->requireRoutersFiles();
        $match = $this->match();
        $targetParams = $this->explodeTarget($match['target']);
        if ($match) {
            if (!is_callable($match['target'])) {
                $controller = $this->callController($targetParams[0]);
                if ($controller){
                    if($this->callMethod($controller,$targetParams[1],$match['params']));
                }
            }
            else {
                call_user_func_array($match['target'], $match['params']);
            }
        }
        else {
            echo "<strong>404</strong>";
        }
    }

    private function emailRegEX(){
        $this->addMatchTypes([
            "e"=> '\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b' ]);
    }

}