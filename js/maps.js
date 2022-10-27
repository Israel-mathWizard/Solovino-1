
  const mapDiv = document.getElementById("map");
  const argCoords = {lat: 20.49530, lng: -99.18301};
  let map;
  let marker;
  function initMap(){
    map = new google.maps.Map(mapDiv, {
    center: argCoords,
    zoom: 13
});
marker= new google.maps.Marker({
  position: argCoords,
  map: map,
  title: "Solovino inc.",
  icon: {url:"./imgs/Logo.ico", scaledSize: new google.maps.Size(30, 30)}
});

  }