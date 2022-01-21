<?php

echo 'Our request is =  "' . $_SERVER['QUERY_STRING'] . '"' ;

require '../Core/Router.php'; //require file router
$router = new Router();
echo get_class($router);


?>