<?php include('pages/db.php') ; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="assets/js/C_bar.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="icon" type="image/png" href="assets/img/cdo.png">
   <link href="assets/css/login.css" rel="stylesheet"></link>
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
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Welcome <b>GUEST</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a></li>
  </ul>

  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
 
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart_div"></div>
      

</body>
</html>