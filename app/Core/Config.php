<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 01/04/17
 * Time: 12:59 م
 */

namespace App\Core;


class Config
{
    private static $config = [
        // App Configuration
        "debug" => true,
        "app_name" => "Owais's Tiny MVC",
        "base_path" => "/",



        // database/Eloquent Configurations
        "db" => [
            "db_host" => "localhost",
            "db_name" => "mvc_database",
            "db_user" => "root",
            "db_password" => "",
            "db_char" => "UTF8",
            "db_prefix" => ""
        ],


        // TWIG Configurations
        "twig" =>[
            "views_path" =>__ROOT__ . "app/Views",

            "options" =>[
                'cache' => __ROOT__.'app/Views/cashedViews',
            ],

        ]
    ];








    public static function getConfig(){
        return self::$config;
    }
    public static function getDatabaseConfig(){
        return self::$config['db'];
    }

    function __get($name)
    {
        return self::$config[$name];
    }

}