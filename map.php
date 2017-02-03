<?php include('pages/db.php') ; ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/jqueryv8.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>

  <link rel="icon" type="image/png" href="assets/img/cdo.png">
   <link href="assets/css/login.css" rel="stylesheet"></link>
    <link href="assets/css/global.css" rel="stylesheet"></link>
  <link rel="stylesheet" href="assets/css/global.css">
	<title>Air Cagayan de Oro City </title>
	<center>
	<img src="assets/img/header.jpg" alt="logo" media="(max-width: 400px)">
	</center>
</head>
<body>

  <ul class="topnav" id="myTopnav">
  <li class="active"><a href="index.php">  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Vehicle Emmision</a></li>
  <li><a href="map.php">AQI</a></li>
  <li><a href="pages/login.php">Login</a></li>

  <ul class="nav navbar-nav navbar-right">
      <li><a href="map.php"><span class="glyphicon glyphicon-user"></span> Welcome <b>GUEST</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a></li>
  </ul>

  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
 
 <div  id='map'  style='height:490px;'  />  
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />  
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>  
  
<script>  
      var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';  
      var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';  
      var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});  
  
      var  WAQI_URL    =  "http://tiles.aqicn.org/tiles/usepa-aqi/{z}/{x}/{y}.png?token=_TOKEN_ID_";  
      var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';  
      var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});  
  
      var  map  =  L.map('map').setView([10.1000,  120],  6);  
      map.addLayer(osmLayer).addLayer(waqiLayer);  
</script>

  <div id="footer">
          <span>Copyright &copy; <?php echo date('Y'); ?>. Xavier University-Ateneo de Cagayan | College of Computer Studies. All rights reserved.</span>
        </div>  


</body>
</html>