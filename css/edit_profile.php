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
      <h2>Profile Edit</h2>
    </hgroup>
</div>

 <p class="ph2"><a href="main.php">home&gt;&gt;</a><a href="customer.php">customer view&lt;&lt;</a><a href="customer.php">customer edit</a></p>
<?php
   session_start();  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error()); 

?>
<?php 
 $sql = "SELECT custid, fname, sname, email, telephone, username, password, profileext FROM CUSTOMER WHERE USERNAME = '" . $_SESSION['username'] . "'";
  $result = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($result))
  { $custid =$row['custid'];
  $fname=$row['fname'];
  $sname=$row['sname'];
  $email=$row['email'];
  $telephone=$row['telephone'];
  $username=$row['username'];
  $password=$row['password']; 
  $uploadimage=$row['profileext']; 
  }

?>


<form name="form1" method="post" action="log_server.php" enctype="multipart/form-data" onsubmit="return validate1();">
<input type="hidden" name="hiden" value="<?php echo $custid; ?>" />
<fieldset>
<legend>personal info</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">FULL NAME:</td>
    <td width="40%"><input type="text" name="fname"  value="<?php echo $fname ;?>"/></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>S/O:</td>
    <td><input type="text" name="son_of" value="<?php echo $son_of ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>




