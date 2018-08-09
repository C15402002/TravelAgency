<?php
session_start();


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li><a href="main.html">Home</a></li>
        <li ><a href="about.html">About</a></li>
        <li><a href="flight.html">Flights</a></li>
        <li><a href="cruise.html">Cruise</a></li>
        <li><a href="package.html">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>


<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
    <hgroup>
      <h2>Login</h2>
    </hgroup>
</div>

<form action ="upload.php" method="POST" entype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit">upload</button>
</form>

<form action= "login.php"













</body>
</html>