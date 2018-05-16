<?php

//Use autoloader here
require 'libs/bootstrap.php';
require 'libs/controller.php';
require 'libs/view.php';
require 'libs/model.php';



$app = new Bootstrap();






/*
$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/',$url);

print_r($url);

require 'controllers/' . $url[0] . '.php';

$controller = new $url[0];


if (isset($url[2])) {
    
//$controller->function();    
$controller->{$url[1]}($url[2]);


} 
else {



if (isset($url[1])) {
    
              //$controller->function();    
    $controller->{$url[1]}();


}
}*/

?>