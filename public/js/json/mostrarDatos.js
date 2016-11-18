$(document).ready(function(){
    /**
     * Despliega la lista de kupelas
     */ 
    if(window.location.pathname == "/kupelak") {
        $.getJSON("./src/vista/kupela/json/kupelak.json", function(data){
           $.each(data, function(key, val){
               $("#lista-kupelak").append("<div id='kupela-" + val.kupela_id + "' class='thumbnail col-sm-12 col-md-3 col-md-offset-1'></div>");
               $("#kupela-" + val.kupela_id).html(
                   "<h3>" + val.nombre + "</h3>" +
                   "<img src='" + val.foto + "' class='img-responsive' />" +
                   "<p>" + val.descripcion + "</p>"
                );
           });
        }, "json");
    }
    
    /**
     * Despliega la lista de sagardotegis
     */ 
    if(window.location.pathname == "/sagardotegiak"){
        $.getJSON("/sagardotegiak", function(data){
           $.each(data, function(key, val){
               $("#lista-sagardotegis").append("<div id='sagardotegi-" + val.sagar_id + "' class='thumbnail col-sm-12 col-md-3 col-md-offset-1'></div>");
               $("#sagardotegi-" + val.sagar_id).html(
                   "<h3>" + val.nombre + "</h3>" +
                   "<img src='" + val.foto + "' class='img-responsive' />" +
                   "<p><b>Latitud</b></p>" + 
                   "<p>" + val.latitud + "</p>" +
                   "<p><b>Longitud</b></p>" +
                   "<p>" + val.longitud + "</p>" +
                   "<p><b>Dirección</b></p>" +
                   "<p>" + val.direccion + "</p>" +
                   "<a href='#' class='btn btn-block btn-default'>Ver kupelas</a>"
                );
           });
        }, "json");
    }
});