$(document).ready(function(){
    $.getJSON("json/kupelak.json", function(data){
       $.each(data, function(key, val){
           $("#lista-kupelak").append("<div id='kupela-" + val.kupela_id + "' class='thumbnail'></div>");
           $("#kupela-" + val.kupela_id).html(
               "<h3>" + val.nombre + "</h3>" +
               "<img src='" + val.foto + "' />" +
               "<p>" + val.descripcion + "</p>"
            );
       });
    }, "json");
});