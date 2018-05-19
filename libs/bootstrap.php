<?php

class Bootstrap {

    function __construct() {

        $url = isset($_GET['url']) ? $_GET['url']: null;        //get url
        $url = rtrim($url, '/');    //trim url
        $url = explode('/', $url);  //explode url
        // print_r($url);
        
         
        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;  //return false so the below code does not execute
        } 
            
            
            
        //check if file exits    
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {


            // if exists load the controller
            require $file;
        } else {

            require 'controllers/errors.php';
            $controller = new Errors();
            return FALSE;

            //throw new Exception("The file; $file does not exist");
        }



        $controller = new $url[0];

        //calling methods
        if (isset($url[2])) {
            
            if (method_exists($controller, $$url[1])){

            //$controller->function();    
            $controller->{$url[1]}($url[2]);
            }
            else {
                echo "error";
            }
            
            
            
            
        } else {



            if (isset($url[1])) {

                //$controller->function();    
                $controller->{$url[1]}();
                
            }
           else{
               $controller->index();
           }
        }
        
        
    }

}

?>