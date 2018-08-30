<?php
session_start();  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error()); 

  $sql="select custid, uploadimage from customer where custid='$_REQUEST[custid]'";
$result=mysqli_query($db, $sql);

while($row=mysqli_fetch_array($result))
{
	$cust=$row['custid'];
	$uploadimage=$row['uploadimage'];
	
	
}
?>
 <?php if(isset($_POST['updatephoto']))
	{
 
 $image=$_FILES['userfile']['name']; 
 $file_size=$_FILES['userfile']['size'];
 $tmp_file_name=$_FILES['userfile']['tmp_name'];
echo"<br>";
$uploaddir='user/'.$image;
$uploadimage=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$uploadimage))
{
	header( 'Location: customer.php' ) ;

}
else
{
if($_FILES['userfile']['error']>0)
     {
	echo"error occured";
     }
if($_FILES['userfile']['size']>2097151)
         {
	echo"file size is too large";
         }
}// end of else

$sql ="update customer set uploadimage ='$uploadimage' where custid='$_POST[custid]'";
$result=mysqli_query($db, $sql) ;


	}


?>


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
<!---
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

--->
<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
    <hgroup>
      <h2>Upload profile picture</h2>
    </hgroup>
</div>
<p class="ph2"><a href="main.php">home&gt;&gt;</a><a href="customer.php">View Profile&lt;&lt;</a><a href=" ">Edit Profile</a></p>
<table width="500" border="0" align ="center">
  

  <tr>
    <td width="3%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
    <td width="33%" align="right"><?php if ($uploadimage!=""){?>
      <a href="photoupdate.php?custid=<?php echo $custid;?>">
      	<img src="<?php echo $uploadimage;?>" width="100" height="113" /></a>
      <?php } else {?>
      <a href="custid=<?php echo $custid;?>">
      	<img src="user/default.gif" width="100" height="100" /></a>
      <?php }?></td>
    <td width="42%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="top"><strong>Update photo</strong></td>
    <td align="left" valign="top"><form method="post" action="photoupdate.php" enctype="multipart/form-data" name="form1" onsubmit="return file_validate();">
    	<input type="file" name="userfile" id="userfile" />
    	<input type="hidden" name="custid" value="<?php echo $custid;?>" />
    	 <input type="submit" value="submit" name="updatephoto" onclick ="location.href='customer.php' return false"/>
    <td>&nbsp;</td>
  </tr>
  

</table>




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