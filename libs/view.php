<?php

class View {

    function __construct() {
        //echo "this is the view <br>";
    }

    public function render($name) {
//(, $dont_include = false) {


        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';

        /* In case we do not want to include the header/footer: 
         * if($dont_include == true){
          require 'views/' . $name . '.php';

          }
          else{
          require 'views/header.php';
          require 'views/' . $name . '.php';
          require 'views/footer.php';
          } */
    }

}
