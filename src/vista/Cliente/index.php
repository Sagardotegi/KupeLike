<?php

    include $_SERVER['DOCUMENT_ROOT']."/src/controlador/ClienteController.class.php";
    
    $controller = new ClienteController();
    
?>

<h1>Listado de Clientes</h1>

<?php

    $controller->index();