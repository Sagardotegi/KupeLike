<div class="row">
  <div class="col-md-12">
    <div class="mapbox">
      <h1 class="text-center mtitle green-color">Mapa</h1>
  
      <div id="map" class="mapa"></div>
      
      <script>
      function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
          center: new google.maps.LatLng(43.3274324,-1.9707499), 
          zoom: 17,
          scrollwheel: false
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
      }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
    </div>
  </div>
</div>