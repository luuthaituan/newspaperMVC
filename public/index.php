<?php

//echo 'Our request is =  "' . $_SERVER['QUERY_STRING'] . '"' ;

require '../Core/Router.php'; //require file router
$router = new Router();
//echo get_class($router);
//Thêm routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//Hiện ra bảng routes
//echo '<pre>';
//var_dump($router->getRoutes());
//echo '</pre>';

//Match
$url = $_SERVER['QUERY_STRING'];
if($router->match($url)){
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URl '$url'";
}
?>