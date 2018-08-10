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
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;" >
    <hgroup>
      <h2>Register Now!</h2>
    </hgroup>
</div>



<form id="msform" action = "register.php">
  <?php include('errors.php'); ?>
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Personal Details</li>
  </ul>



  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2><br>
      <img src ="icon/log.png" alt="login" style="width:90px; height:90px;"><br>
    <input type = "text" name = "username" placeholder = "Username "/>
    <input type="password" name="password_1" placeholder="Password" />
    <input type="password" name="password_2" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
         <div class="forgot">
        <a href="login.php">Already have an account?</a>
      </div>
  </fieldset>

  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <input type="text" name="fname" placeholder="First Name"   />
    <input type="text" name="sname" placeholder=" Surname" />
    <input type="tel" name="telephone" placeholder="Phone" />
    <input type="email" name="email" placeholder="Email"/>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="reg_submit" class="reg_submit action-button" value="Submit" />
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
        <button onclick ="location.href='login.php'" class="button" >Login</button>  
        <button onclick ="location.href='register.php'" class="button" >Register</button>
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

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script  src="js/reg.js"></script>
</body>
</html>