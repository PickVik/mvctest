<?php
class Bootstrap {

    function __construct() {
        
        $url = $_GET['url'];        //get url
        $url = rtrim($url, '/');    //trim url
        $url = explode('/', $url);  //explode url

       // print_r($url);
        
        //check if file exits
        
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)){
            
            
        // if exists load the controller
        require $file;
            
        }
        else {
           
            require 'controllers/errors.php';
            $controller = new Errors();
            return FALSE;
         
        //throw new Exception("The file; $file does not exist");
            
        }
      
         

        $controller = new $url[0];


        if (isset($url[2])) {

            //$controller->function();    
            $controller->{$url[1]}($url[2]);
        } else {



            if (isset($url[1])) {

                //$controller->function();    
                $controller->{$url[1]}();
            }
        }
    }
    }
?>