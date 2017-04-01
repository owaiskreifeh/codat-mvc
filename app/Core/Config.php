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
        "debug" => true,
        "app_name" => "Tiny MVC",
        "base_path" => __DIR__."/../public",
        "views_path" =>__DIR__."/../app/Views",
        "db" => [
            "db_host" => "localhost",
            "db_name" => "mvc_database",
            "db_user" => "root",
            "db_password" => "",
            "db_char" => "UTF8",
            "db_prefix" => ""
        ],
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