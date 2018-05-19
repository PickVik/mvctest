<?php

class Help extends Controller {

    function __construct() {
         parent::__construct();
        
        
    }
    
    function index(){
        $this->view->render('help/index');
    }

    public function other($arg = false) {
        
        
        /*  test for view and controller
        echo "we are in the other <br>";

        echo "Optional: $arg";*/

        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->something=$model->something();
    }
    
    

}

?>