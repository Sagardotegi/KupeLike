<?php

    include $_SERVER['DOCUMENT_ROOT']."/templates/header.php";
    include $_SERVER['DOCUMENT_ROOT']."/src/controlador/KupelaController.class.php";
    
    $controller = new KupelaController();
    $controller->index();
    
?>

    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Listado de Kupelas</h1>
            <div id="lista-kupelak" class="col-sm-12 col-md-3"></div>
        </div>
    </div>
    
<?php

    include $_SERVER['DOCUMENT_ROOT']."/templates/footer.php";