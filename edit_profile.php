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
        <li><a href="cruise.php">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>


<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
    <hgroup>
      <h2>Profile Edit</h2>
    </hgroup>
</div>

 <p class="ph2"><a href="main.php">home&gt;&gt;</a><a href="customer.php">View Profile&lt;&lt;</a><a href="edit_profile.php">Edit Profile</a></p>
<?php 
 $sql = "SELECT custid, fname, sname, email, telephone, username, password, uploadimage FROM CUSTOMER WHERE USERNAME = '" . $_SESSION['username'] . "'";
  $result = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($result))
  { $custid =$row['custid'];
  $fname=$row['fname'];
  $sname=$row['sname'];
  $email=$row['email'];
  $telephone=$row['telephone'];
  $username=$row['username'];
  $password=$row['password']; 
  $uploadimage=$row['uploadimage']; 
  }

?>


<form name="form1" method="post" action="log_server.php" enctype="multipart/form-data" onsubmit="return validate1();">
<input type="hidden" name="hiden" value="<?php echo $custid; ?>" />
<fieldset>
<legend>personal info</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">First Name:</td>
    <td width="40%"><input type="text" name="fname"  value="<?php echo $fname ;?>"/></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Surname:</td>
    <td><input type="text" name="sname" value="<?php echo $sname ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $username ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Password:</td>
    <td><input type="text" name="password" value="<?php echo $password ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
<tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Email:</td>
    <td><input type="email" name="email" value="<?php echo $email ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Telephone:</td>
    <td><input type="telephone" name="telephone" value="<?php echo $telephone ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>


  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="custedit" /><a href="customer.php"></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
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