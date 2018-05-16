<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
        echo "here is the help <br>";
    }
    
    public function other($arg = false){
        
        echo "we are in the other <br>";
        
        echo "Optional: $arg";
        
        require 'models/help_model.php';
        $model = new Help_Model();
        
    }

}
?>