

src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js'
mapboxgl.accessToken = 'pk.eyJ1Ijoid2FybW9hIiwiYSI6ImNqeTF1dDBsdjBoeXAzYm81bTh1enh6OXYifQ.NQ9tiGtLOJbcubijZiS47A';


var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/warmoa/cjzgz32jb2ktr1cqs5syw8cb3',
    center: [100.370027, -0.300671], // starting position
    zoom: 17 // starting zoom
});


var marker = new mapboxgl.Marker({
  draggable: true
  })
  .setLngLat([100.370027, -0.300671])
  .addTo(map);

  function onDragEnd() {
    var lngLat = marker.getLngLat();
    coordinates.style.display = 'block';
    coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
    }
     
    marker.on('drag', onDragEnd);
    
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    
  } else { 
    x.innerHTML= "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    marker.setLngLat([position.coords.longitude, position.coords.latitude])
}