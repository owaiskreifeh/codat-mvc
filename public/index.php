<?php
define("__ROOT__",__DIR__ . '/../');
require __DIR__.'/../vendor/autoload.php';
require __DIR__ . '/../app/Core/bootstrap.php';
use App\Core\Config as Config;

if (Config::getConfig()['debug']) {
    echo '<pre>';
    echo "PUBLIC DIR : " . __DIR__ . "<hr>";
    echo "ROUTER => " . $_SERVER['REQUEST_URI'] ?? "err REQUEST_URI" ;
    echo '<hr>';
    echo '';
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    echo "</pre>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo Config::getConfig()['app_name'] ?> </title>
</head>
<body>

</body>
</html>

