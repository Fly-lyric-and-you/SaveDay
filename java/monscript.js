function openNavig() {
document.getElementById("myNavig").style.opacity = "1";
document.getElementById("myNavig").style.height = "100%";
}
setTimeout(openNavig, 4000);

function closeNavig() {
  document.getElementById("myNavig").style.opacity = "0";
  document.getElementById("myNavig").style.height = "0%";
}


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function closeFunction() {
  document.getElementById("myDropdown").classList.remove('show');
}


/*var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById("demo").innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      document.getElementById("demo").innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      document.getElementById("demo").innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      document.getElementById("demo").innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      document.getElementById("demo").innerHTML = "An unknown error occurred."
      break;
  }
}


function init() {

  const cityMap = {

      lat: 44.837789,
      long: -0.57918,
  }

  const zoomLevel = 12;


  var mymap = L.map('mapid').setView([cityMap.lat, cityMap.long], zoomLevel);


  var marker = L.marker([44.837789, -0.57918]).addTo(mymap);


  var circle = L.circle([44.837789, -0.55], {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5,
      radius: 500
  }).addTo(mymap);
  circle.bindPopup("warning!");



  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoicGF1bGFjZXR5bCIsImEiOiJja3Y4bHBpdjYycHRnMzFscGozOXpncHFnIn0.iY-4A4Yo1Riz09aPbzwk4w'
  }).addTo(mymap);

  if ("geolocation" in navigator) {
    
  } else {

  }

}*/



function init() {
        navigator.geolocation.getCurrentPosition(lancerMap,showError);
}



function lancerMap(position) {
  var mymap = L.map('mapid').setView([position.coords.latitude, position.coords.longitude], 12);


  var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(mymap);


  var circle = L.circle([44.837789, -0.55], {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5,
      radius: 500
  }).addTo(mymap);
  circle.bindPopup("warning!");



  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1IjoicGF1bGFjZXR5bCIsImEiOiJja3Y4bHBpdjYycHRnMzFscGozOXpncHFnIn0.iY-4A4Yo1Riz09aPbzwk4w'
  }).addTo(mymap);
  
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      document.getElementById("demo").innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      document.getElementById("demo").innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      document.getElementById("demo").innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      document.getElementById("demo").innerHTML = "An unknown error occurred."
      break;
  }
}




