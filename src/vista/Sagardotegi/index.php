<?php

    include "../../controlador/SagardotegiController.class.php";
    
    $controller = new SagardotegiController();
    
?>

<h1>Listado de Sagardotegis</h1>

<?php

    $controller->index();