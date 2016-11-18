$(document).ready(function(){

    
    /**
    * Despliega la lista de sagardotegis
    */ 
    $.getJSON("/sagardotegiak", function(data){
       $.each(data, function(key, val){
           $("#carouselol").append("<li data-target='#myCarousel' data-slide-to='1'></li>");
           $("#carousel-inner").append(
               "<div class='item'>" +
               "<img src='" + val.foto + "'>" +
               "<div class='carousel-caption'>" +
               "<h3>" + val.nombre + "</h3>" +
               "<p>" + val.direccion + "</p>" +
               "</div>" +
               "</div>"
            );
       });
    }, "json");

});