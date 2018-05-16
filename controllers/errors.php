<?php

class Errors extends Controller
{
    
    function __construct() {
        parent::__construct();
        echo "error";
        $this->view->msg = 'this page does not exist';
        $this->view->render('error/index');
    }

}

?>