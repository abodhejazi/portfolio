<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>

    <style>
       #map {
        height: 100%;
        width: 100%;
       }
    </style>
<div class="col-sm-8 text-left"> 
     <div class=row>
<h1>about page</h1>
<p>This website giving the opertunitie for clients to buy laptops online from all over jeddah city </p>
</div>
     <div id="map"></div>
    <script>
   function myMap() {
  var myCenter = new google.maps.LatLng(21.585207,39.177982); 
  var jeddah = new google.maps.LatLng(21.585207,39.177982);
  var myPos = new google.maps.LatLng(24.7136,46.6753);


  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var mapOptions = {center: jeddah, zoom: 7};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  
  
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  
    var marker2 = new google.maps.Marker({position:myPos});
  marker2.setMap(map);

  var infowindow = new google.maps.InfoWindow({
    content: "Abdulrahman Riyadh shpe"
  });
    var info = new google.maps.InfoWindow({
    content: " Abdulrahman Jeddah shop"
  });
  infowindow.open(map,marker);
  info.open(map,marker2);
  
   var myCity = new google.maps.Circle({
    center: jeddah,
    radius: 50000,
    strokeColor: "#0000FF",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#0000FF",
    fillOpacity: 0.4
  });
  myCity.setMap(map);

}

    </script>
     
      
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABaFdxy2T7t7viJXPynBEMvT40wJHfzpY&callback=myMap">
    </script>


</div>
 <?php require ('../includes/rightnav.php');?>
<?php require ('../includes/footer.php');?>
