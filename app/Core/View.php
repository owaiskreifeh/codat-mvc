<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 04:31 م
 */

namespace App\Core;


class View
{
    private static $view;
    function __construct()
    {
        $config = new Config();
        $loader = new \Twig_Loader_Filesystem($config->twig['views_path']);
        $options = $config->twig['options'];
        self::$view = new \Twig_Environment($loader, $options);
    }

    public static function view(string $template, $params = array()){
       self::$view->display($template,$params);
    }

}