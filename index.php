<?php
include "app/config.php";

$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

define('root', $root);

// function dd
function dd($data) {
echo "<pre>";
print_r($data);
}

require_once 'router.php';

// constants
define('layout', "app/views/main.php");
define('views', "app/views/");
define('css', "assets/css/");
define('js', "assets/js/");

use AppRouter\Router;

$router = new Router(function ($method, $path, $statusCode, $exception) {
http_response_code($statusCode);
echo "error 404";
});

$router->get('session', function() {
dd($_SESSION) ;
});

$router->get('session_destroy', function() {
session_destroy();
echo "Session Destroyed";
});

/****End json currencies****/

$controller = 'app/controller';
$indir = array_filter(scandir($controller), function($item)use($controller)
{return !is_dir($controller.'/'.$item);});
foreach ($indir as $key=>$value){
include $controller.'/'.$value;
}

$router->get('/page/(.*)', ['PageController', 'viewPage']);
$router->route(['OPTION', 'PUT'], '/test', 'PageController::test');

$router->dispatchGlobal();

?>