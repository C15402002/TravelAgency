<!DOCTYPE html>
<?php include('log_server.php');?>


<html>
    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/profile.css">

    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li><a href="main.php">Home</a></li>
        <li ><a href="about.php">About</a></li>
        <li><a href="flight.php">Flights</a></li>
        <li><a href="cruise.php">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>


<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
    <hgroup>
      <h2>Profile</h2>
    </hgroup>
</div>

<?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
  
  $sql = "SELECT custid, username, fname, sname, email, telephone FROM CUSTOMER WHERE USERNAME = '" . $_SESSION['username'] . "'";
  $result = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($result))
  {
   echo ("<b><h1><center>Hello, {$row['username']}</h1></br>");
    echo ("<b><center>Firstname: {$row['fname']}</br></br>");
   echo ("<b><center>Surname: {$row['sname']}</br></br>");
    echo ("<b><center>Telephone: {$row['telephone']}</br></br>");
   echo ("<b><center>Email: {$row['email']}</br></br>");

  }
 ?>
 <input type="button" value ="delete" class = "delete" onclick = "location.href = 'delete.php'; return false"></br>
<input type="button" value ="edit" class = "edit" onclick = "location.href = 'edit_profile.php'; return false"></br>
<?php 
} else {
    echo "Please log in first to see this page.";
}

?>




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