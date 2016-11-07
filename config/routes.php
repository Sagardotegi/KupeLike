<?php

    $project_root = $_SERVER['DOCUMENT_ROOT'];
    
    require $project_root."/public/vendor/autoload.php";
    
    $app = new \Slim\App();
    
    $app->get('/kupelak', function(){
        include $project_root."src/vista/kupela/index.php";
    });
    
    $app->run();
    
?>