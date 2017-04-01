<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 01/04/17
 * Time: 01:22 م
 */
namespace App\Core;
use App\Core\Config as Config;


class Router extends \AltoRouter
{
    protected $basePath;
    function __construct()
    {
        $config = new Config();
        parent::setBasePath($config->base_path);
        parent::__construct();
    }

    public function get($route,$callable){
        self::map('GET',$route,$callable);
    }
    public function post($route,$callable){
        self::map('POST',$route,$callable);
    }
    public function any($route,$callable){
        self::map('GET|POST',$route,$callable);
    }



    public function run(){
        echo "Done in run";
        $match = self::match();
        if( $match && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] );
            echo "Done";
        } else {
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }
    }

}