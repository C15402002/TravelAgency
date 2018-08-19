<!DOCTYPE html>
<?php include('server.php') ?> 
<html>
    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<!----
<form action ="upload.php" method="POST" entype="multipart/form-data">
	<input type="file" name="file">
	<button type="submit">upload</button>
</form> --->
  <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>


<?php if(isset($_SESSION['username'])) : ?>
  <p>welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <p><a href ="login.php?logout ='1'" style ="color: red;">logout</a></p>
<?php endif ?>

</body>
</html>