<?php

class Database extends PDO{

    public function __construct() {
        
        parent::__construct('mysql:host=localhost;dbname=blog_test1', 'Library', '12345');
        
    }

}