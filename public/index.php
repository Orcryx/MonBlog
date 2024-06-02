<?php

use src\service;
require "../vendor/autoload.php"; // c'est le seul require autorisé !!! 


$router = new Router();

$router->get('/public/index', ['controller\home','getHome']); 
$router->get('/public/blog', ['controller\blog' , 'getGallery']);
$router->get('/public/contact', ['controller\contact' , 'getForm']); 
// $router->get('/public/blog', ['controller\blog', 'getPost']);
//$router->get('/public/blog', ['controller\blog', 'getPost'], $id);

//afficher le retour du routeur
echo $router->run($_SERVER['REQUEST_URI']);
