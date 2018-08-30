<?php
include("log_server.php"); 
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> 


</head>

<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li><a href="main.php">Home</a></li>
        <li ><a href="about.html">About</a></li>
        <li><a href="flight.php">Flights</a></li>
        <li><a href="cruise.html">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
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
<br>
<?php if (isset($_SESSION['error']))
{
    echo"<p style='color:red; text-align:center;'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
?>

<form id="msform" action = "login.php" method = "post">
 
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Login</h2><br>
    <img src ="icon/log.png" alt="login" style="width:90px; height:90px;"><br>
    <input type="text" name="username"placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="log_submit" class="submit action-button" value="Submit" />

        <div class="forgot">
          <a href="register.php">Don't have an account?</a>
        </div>
  </fieldset>
 
</form>




   <footer id="footer">
  <div class="top sm-hidden">
    <div class="column left">
      <h2>About</h2>
      <hr>
      <ul>
        <li><a href ="about.html"> How many Countries? </a></li>
        <li><a href ="about.html"> Best for our guests</a></li>
        <li><a href ="package.html"> Package trips</a></li>
        <li><a href ="about.html"> Travel services</a></li>
      </ul>
    </div>
    <div class="column mid">
      <h2>JOIN US!</h2>
      <hr>
      <ul>
        <button onclick ="location.href='login.php'" class="button active" >Login</button>  
        <button onclick ="location.href='register.php'"class="button" >Register</button>
        <li><a href ="customer.php">My Profile</a></li>
        <li><a href ="mybooking.php">My Bookings</a></li>
      </ul>     
    </div>
    <div class="column right">
      <h2>Contact</h2>
      <hr>
      <ul>
        <li>Email: info@vaykaytravels.ie</li>
        <li>Phone: 01-2233432.</li>
        <li>Address: 44 Merrions Square, Dublin, Ireland.</li>
      </ul>     
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="bottom">Copyright &copy; VayKay Travels 2018 | Travel Agency</div>
</footer>


</body>
</html>