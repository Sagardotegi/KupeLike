<?php

    $project_root = $_SERVER['DOCUMENT_ROOT'];
    
    require $project_root."/public/vendor/autoload.php";
    
    require $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";
    
    include $_SERVER['DOCUMENT_ROOT']."/src/controlador/KupelaController.class.php";
    include $_SERVER['DOCUMENT_ROOT']."/src/controlador/SagardotegiController.class.php";
    
    /**
     * Cargamos los controladores
     */
    $kupela = new KupelaController();
    $sagardotegi = new SagardotegiController();
    
    $app = new \Slim\App();
    
    $app->get('/', function(){
       include_once $project_root."index.php";
    });
    
    $app->get('/kupelak', function(){
        include_once $project_root."src/vista/kupela/index.php";
        $kupela->index();
    });
    
    $app->get('/sagardotegiak', function(){
        include_once $project_root."src/vista/sagardotegi/index.php";
        $sagardotegi->index();
    });
    
    $app->run();
    
?>