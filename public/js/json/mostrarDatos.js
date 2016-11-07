$(document).ready(function(){
    if(window.location.pathname == "/kupelak") {
        $.getJSON("./src/vista/kupela/json/kupelak.json", function(data){
           $.each(data, function(key, val){
               $("#lista-kupelak").append("<div id='kupela-" + val.kupela_id + "' class='thumbnail col-sm-12 col-md-3 col-md-offset-1'></div>");
               $("#kupela-" + val.kupela_id).html(
                   "<h3>" + val.nombre + "</h3>" +
                   "<img src='" + val.foto + "' />" +
                   "<p>" + val.descripcion + "</p>"
                );
           });
        }, "json");
    }
    
    
    if(window.location.pathname == "/sagardotegiak"){
        $.getJSON("./src/vista/sagardotegi/json/sagardotegiak.json", function(data){
           $.each(data, function(key, val){
               $("#lista-sagardotegis").append("<div id='sagardotegi-" + val.sagar_id + "' class='thumbnail col-sm-12 col-md-3 col-md-offset-1'></div>");
               $("#sagardotegi-" + val.sagar_id).html(
                   "<h3>" + val.nombre + "</h3>" +
                   "<img src='" + val.foto + "' />" +
                   "<p>" + val.latitud + "</p>" + 
                   "<p>" + val.longitud + "</p>" + 
                   "<p>" + val.direccion + "</p>"
                );
           });
        }, "json");
    }
});