
<?php
 session_start();  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());

	$check = $_SESSION['username'];
	$ssql = "SELECT username from customer where username = '$check'";
	$result=mysqli_query($db,$ssql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$sql="DELETE FROM customer WHERE username='$check'";
	mysqli_query($db, $sql);
	if($db -> query($sql) === TRUE)
	{
		echo "<br><br>";
    	echo $check;
 		echo "<br><br>";
        echo "Deleted Successfully";
        echo "<br><br>";
        header("Location:main.php");
  }
  else
  {
  	header("Location:profile.php");
		echo "ERROR!";
	}
?>