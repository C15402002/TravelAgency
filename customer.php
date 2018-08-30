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
      <h2>Profile</h2>
    </hgroup>
</div>

<?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
  
  $sql = "SELECT custid, fname, sname, email, telephone, username, password, uploadimage FROM CUSTOMER WHERE USERNAME = '" . $_SESSION['username'] . "'";
  $result = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($result))
  {
  $custid =$row['custid'];
  $fname=$row['fname'];
  $sname=$row['sname'];
  $email=$row['email'];
  $telephone=$row['telephone'];
  $username=$row['username'];
  $password=$row['password']; 
  $uploadimage=$row['uploadimage']; 
  
 ?> 
 <p align="center" valign="top"><h1> Hello, <?php       echo  $username;                ?></h1></p>
 
     <p> click image to change profile picture </p>
 <p align="center" valign="top"><?php if ($uploadimage!=""){?><a href="photoupdate.php?custid=<?php echo $custid;?>"><img src="<?php echo $uploadimage;?>" width="100" height="113" /></a><?php } else {?><a href="photoupdate.php?custid=<?php echo $custid;?>"><img src="user/default.gif" width="100" height="100" /></a><?php }?></p> 

    <p align="center" valign="top">Firstname: <?php       echo  $fname;                  ?></p>
    <p align="center" valign="top">Surname: <?php       echo  $sname;                     ?></p>
    <p align="center" valign="top">Email: <?php      echo  $email;               ?></p>
    <p align="center" valign="top">Telephone: <?php       echo  $telephone;               ?></p>
   


  <td><input type="button" value ="delete" class = "delete" onclick = "location.href = 'delete.php'; return confirm('Are you sure you want to delete?')"></td>
<td><input type="button" value ="edit" class = "edit" onclick = "location.href = 'edit_profile.php'; return false"></td>
<td><input type="button" value ="logout" class = "logout" onclick = "location.href = 'logout.php'; return false"></td>
<?php include('result.php');?>
<?php 
} }else {
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