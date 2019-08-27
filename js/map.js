

src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js'
mapboxgl.accessToken = 'pk.eyJ1Ijoid2FybW9hIiwiYSI6ImNqeTF1dDBsdjBoeXAzYm81bTh1enh6OXYifQ.NQ9tiGtLOJbcubijZiS47A';

var dataList = document.getElementById('tipe');
var input = document.getElementById('pilihtipe');
var geojson;
var request = new XMLHttpRequest();
var i=1;
var x = document.getElementById("demo");

request.onreadystatechange = function (response) {
    if (request.readyState === 4) {
        if (request.status === 200) {
            var jsonOptions = JSON.parse(request.responseText);
            jsonOptions.forEach(function (item) {
                var option = document.createElement('option');
                option.value = item.nama;
                dataList.appendChild(option);
            });
            input.placeholder = "Pilih Tipe";
        } else {
            input.placeholder = "Couldn't load datalist options :(";
        }
    }
};
input.placeholder = "Loading options...";

request.open('GET', 'php/tipe.php', true);
request.send();

var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/warmoa/cjzgz32jb2ktr1cqs5syw8cb3',
    center: [100.370027, -0.300671], // starting position
    zoom: 17 // starting zoom
});





// initialize the map canvas to interact with later
var canvas = map.getCanvasContainer();

// an arbitrary start will always be the same
// only the end or destination will change
var start = [100.370027, -0.300671];

var marker = new mapboxgl.Marker({
  draggable: true
  })
  .setLngLat([100.370027, -0.300671])
  .addTo(map);

function onDragEnd() {
  var lngLat = marker.getLngLat();
  coordinates.style.display = 'block';
  coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
  start = [lngLat.lng, lngLat.lat];
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
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; 
    marker.setLngLat([position.coords.longitude, position.coords.latitude]);
    start = [position.coords.longitude, position.coords.latitude];
}

function getRoute(end) {
  var url = 'https://api.mapbox.com/directions/v5/mapbox/walking/' + start[0] + ',' + start[1] + ';' + end[0] + ',' + end[1] + '?steps=true&geometries=geojson&access_token=' + mapboxgl.accessToken;
  var req = new XMLHttpRequest();
  req.responseType = 'json';
  req.open('GET', url, true);
  req.onload = function() {
    var data = req.response.routes[0];
    var route = data.geometry.coordinates;
    var geojson = {
      type: 'Feature',
      properties: {},
      geometry: {
        type: 'LineString',
        coordinates: route
      }
    };
    // if the route already exists on the map, reset it using setData
    if (map.getSource('route')) {
      map.getSource('route').setData(geojson);
    } else { // otherwise, make a new request
      map.addLayer({
        id: 'route',
        type: 'line',
        source: {
          type: 'geojson',
          data: {
            type: 'Feature',
            properties: {},
            geometry: {
              type: 'LineString',
              coordinates: geojson
            }
          }
        },
        layout: {
          'line-join': 'round',
          'line-cap': 'round'
        },
        paint: {
          'line-color': '#3887be',
          'line-width': 5,
          'line-opacity': 0.75
        }
      });
    }
    var instructions = document.getElementById('instructions');
var steps = data.legs[0].steps;

var tripInstructions = [];
for (var i = 0; i < steps.length; i++) {
  tripInstructions.push('<br><li>' + steps[i].maneuver.instruction) + '</li>';
  instructions.innerHTML = '<br><span>Anda akan sampai kurang dari ' + Math.floor(data.duration / 60 + 2) + ' menit </span>' + tripInstructions;
}
  };
  req.send();
}

map.on('load', function() {
  // make an initial directions request that
  // starts and ends at the same location
  getRoute(start);
  map.addSource("allbangunan", {
    "type": "geojson",
    "data": "php/data.php"
    });
  map.addLayer({
    "id": "bangunan",
    "type": "circle",
    "source": "allbangunan",
    "paint": {
    "circle-radius": 6,
    "circle-color": "#999999"
    },
    "filter": ["==", "$type", "Point"],
    });

  $("#pilihtipe").on('input', function () {
    var val = this.value;
    if($('#tipe option').filter(function(){
        return this.value.toUpperCase() === val.toUpperCase();        
    }).length) {
        //send ajax request

    
    if (map.getLayer("res"+i)) {
      map.removeLayer("res"+i);
    }
    if (map.getSource("hasil"+i)) {
      map.removeSource("hasil"+i);
    }

    i++;
    map.addSource("hasil"+i, {
      "type": "geojson",
      "data": "php/search.php?nama=" + val
      });
    map.addLayer({
      "id": "res"+i,
      "type": "circle",
      "source": "hasil"+i,
      "paint": {
      "circle-radius": 10,
      "circle-color": "#77cccc"
    },
    "filter": ["==", "$type", "Point"],
    });
    }
  });

  map.addLayer({
    id: 'point',
    type: 'circle',
    source: {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features: [{
          type: 'Feature',
          properties: {},
          geometry: {
            type: 'Point',
            coordinates: start
          }
        }
        ]
      }
    },
    paint: {
      'circle-radius': 0,
      'circle-color': '#3887be'
    }
    
  });
       
  map.on('mouseenter', 'bangunan', function () {
  map.getCanvas().style.cursor = 'pointer';
});
       
  map.on('mouseleave', 'bangunan', function () {
  map.getCanvas().style.cursor = '';
  });

  map.on('click','bangunan', function(e) {
    var description = e.features[0].properties.keterangan;
    var andesc = e.features[0].properties.hewanket;
    var img = e.features[0].properties.gambar;
    var jenis = e.features[0].properties.jenis;
    var pegawai = e.features[0].properties.pawang + "(" + e.features[0].properties.nip + ")";
    
    description = description.toLowerCase().replace(/\b[a-z]/g, function(letter) {
      return letter.toUpperCase();
    });

    var coordsObj = e.lngLat;
    canvas.style.cursor = '';
    if(jenis!="null"){
    document.getElementById("test").innerHTML=andesc + "<br>Jenis : " + jenis + "<br>Pawang :" + pegawai;}
    else{
      document.getElementById("test").innerHTML=" ";
    }
    var popup = new mapboxgl.Popup({closeOnClick: false})
      .setLngLat(coordsObj)
      .setHTML("<img src='images/hewan/" + img + "' alt='gambar hewan' height='420' width='420'><center>" + description + "</center>")
      .addTo(map);

    var coords = Object.keys(coordsObj).map(function(key) {
      return coordsObj[key];
    });
    
    var end = {
      type: 'FeatureCollection',
      features: [{
        type: 'Feature',
        properties: {},
        geometry: {
          type: 'Point',
          coordinates: coords
        }
      }
      ]
    };
    if (map.getLayer('end')) {
      map.getSource('end').setData(end);
    } else {
      map.addLayer({
        id: 'end',
        type: 'circle',
        source: {
          type: 'geojson',
          data: {
            type: 'FeatureCollection',
            features: [{
              type: 'Feature',
              properties: {},
              geometry: {
                type: 'Point',
                coordinates: coords
              }
            }]
          }
        },
        paint: {
          'circle-radius': 10,
          'circle-color': '#f30'
        }
      });
    }
    getRoute(coords);
    
  });
  
});
