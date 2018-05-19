<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
        <link rel="stylesheet" href= "<?php echo URL; ?>public/css/default.css"/>
        <script text="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
        <script text="text/javascript" src="<?php echo URL; ?>public/js/js.js"></script>
        
    </head>
    <body>
        <?php Session::init(); ?>
        <div id="header">
            
            <p>header</p>
            
            <a href="<?php echo URL; ?>index">Index</a>
            <a href="<?php echo URL; ?>help">Help</a>
           
            
           
            <a href="<?php echo URL; ?>login">Login</a>
            
           
            <a href="<?php echo URL; ?>post/logout">Logout</a>
            
            
        </div>
        
        
        
        <div id="content">
        

