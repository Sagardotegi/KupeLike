<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="row">
  <div class="col-md-12">

    <div id="myCarousel" class="carousel slide caja" data-ride="carousel">
      <div class="row"><div class="col-xs-12"><h1 class="text-center mtitle">Sidrerias</h1></div></div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div id="dentroSlider" class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/public/uploads/sagardotegiak/petri.png" alt="Petritegi">
          <div class="carousel-caption">
            <h3>Petritegi</h3>
            <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
          </div>
        </div>

        <div class="item">
          <img src="/public/uploads/kupelak/k1.jpg" alt="Lizeaga">
          <div class="carousel-caption">
            <h3>Lizeaga</h3>
            <p>Beatiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<!--<script>
  $(document).ready(function(){
    
    /**
    * Despliega la lista de sagardotegis
    */ 
    $("#myCarousel").html("");
    
    //$(newRow).appendTo("#myCarousel");
    $.getJSON("https://kupelike-edertxodw.c9users.io/src/vista/sagardotegi/json/sagardotegiak.json", function(data){
      var newRow = "<h1 class='text-center mtitle'>Sidrerias</h1>"+
    "<ol class='carousel-indicators'>"+
    "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>"+
    "<li data-target='#myCarousel' data-slide-to='1'></li>"+
    "</ol>"+
    "<div class='carousel-inner' role='listbox'>";
       $.each(data, function(key, val){
           //$("#carouselol").append("<li data-target='#myCarousel' data-slide-to='1'></li>");
           if (val.sagar_id==1) {
             newRow = newRow + "<div class='item active'>" +
               "<img src='" + val.foto + "'>" +
               "<div class='carousel-caption'>" +
               "<h3>" + val.nombre + "</h3>" +
               "<p>" + val.direccion + "</p>" +
               "</div>" +
               "</div>";
             
           } else {
           newRow = newRow + "<div class='item'>" +
               "<img src='" + val.foto + "'>" +
               "<div class='carousel-caption'>" +
               "<h3>" + val.nombre + "</h3>" +
               "<p>" + val.direccion + "</p>" +
               "</div>" +
               "</div>";
           }
            //$(newRow).appendTo("#myCarousel");
		    });
		    newRow = newRow + "</div><a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>"+
    "<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>"+
    "<span class='sr-only'>Previous</span>"+
  "</a>"+
  "<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>"+
    "<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>"+
    "<span class='sr-only'>Next</span>"+
  "</a>";
    $(newRow).appendTo("#myCarousel");
	  });
	  

});
</script>-->