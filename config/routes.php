<?php

    $project_root = $_SERVER['DOCUMENT_ROOT'];
    
    require $project_root."/public/vendor/autoload.php";
    
    require_once $_SERVER['DOCUMENT_ROOT']."/config/DBConnection.class.php";
    
    include_once $_SERVER['DOCUMENT_ROOT']."/src/controlador/KupelaController.class.php";
    include_once $_SERVER['DOCUMENT_ROOT']."/src/controlador/SagardotegiController.class.php";
    
    use Slim\Http\Request;
    use Slim\Http\Response;
    $app = new \Slim\App();
    
    
    $app->get('/', function(){
       require_once $project_root."index.php";
    });
    
    $app->get('/map', function(){
       require_once $project_root."templates/mapa.php";
    });
    
    $app->get('/sagardotegiak', function(){
        $sagardotegi = new SagardotegiController();
        require_once $project_root."src/vista/sagardotegi/index.php";
        $sagardotegi->index();
    });
    
    $app->get('/kupelak/:sagardotegi_id', function($sagardotegi_id){
        $kupela = new KupelaController();
        require_once $project_root."src/vista/kupela/index.php";
        $kupela->index($sagardotegi_id);
    });
    
    $app->run();
    
?>