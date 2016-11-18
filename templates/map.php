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
var myLatLng1 = {lat: 43.3274324, lng: -1.9707499};
    var myLatLng2 = {lat: 43.3256215, lng: -1.9740511};

  var marker1 = new google.maps.Marker({
    position: myLatLng1,
    map: map,
    title: 'Sagar 1'
  });
  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Sagar 2'
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>