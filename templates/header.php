

<!DOCTYPE html>
<html>
    
    <head>
        
        <title>| KUPELIKE |</title>
        <link rel="shortcut icon" href="" type="image/png"/>
        <link rel="stylesheet" href="/public/css/estilo.css" type="text/css" />
        <link href="/public/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/public/vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Roboto|Lobster" rel="stylesheet">
        <script src="/public/js/jquery-3.1.1.min.js"></script>
        <script src="/public/js/script.js"></script>
        
        

</script>
    </head>
    
    <body>
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xs-12">
                
                <nav class="navbar navbar-light bg-faded row">
                  <a id="navbar-ham" class="navbar-ham col-xs-2 col-md-1 toggle-button"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
                  <a id="navbar-logo" class="navbar-logo col-xs-2 col-md-1 hidden-md hidden-lg" href="#"><i class="fa fa-apple fa-2x" aria-hidden="true"></i></a>
                  <a id="navbar-title" class="navbar-title col-md-4 hidden-xs hidden-sm" href="/">Kupelike</a>
                  <form id="navbar-search" class="col-xs-8 col-md-6 navbar-search form-inline pull-right">
                    <input class="form-control searchBox" type="text" placeholder="Search">
                    <button class="btn search-btn" type="submit"><i class="fa fa-search fa-flip-horizontal fa-1x" aria-hidden="true"></i></button>
                  </form>
                </nav>
                
                </div>
                
                <div class="col-xs-12 searchResults">
                    <span class="closeButton"><i><i class="fa fa-times fa-3" aria-hidden="true"></i></i></span>
                </div>
                
                <div class="menu">
                    <span><i class="fa fa-times fa-2x pull-right close-menu" aria-hidden="true"></i></span>
                    <ul class="menu-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="map">Map</a></li>
                        <li><a href="sagardotegiak">Sagardotegiak</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
               </div>
                
            </div>
            
            <?php
                /**
                 * Cargamos el archivo de configuración de las rutas 
                 */ 
                require $_SERVER['DOCUMENT_ROOT']."/config/routes.php";
            ?>