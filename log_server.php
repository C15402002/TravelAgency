<?php
	session_start();
	//unset($_SESSION["email"]);
	
	$db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());


if (isset($_POST['log_submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['Password'];
		$query = "SELECT * from customer where email = '$email';
		and password = '$password'";
		/*$result = mysqli_query($db,"SELECT * from customer where email = '$email'
		and password = '$password'");*/
		
		if (mysqli_query($db, $query))
		{
			$_SESSION["email"] = $_POST["email"];
			$_SESSION["success"] = "Logged in.";
			header( 'Location: customer.php' ) ;
			
		}
		else
		{
			$_SESSION["error"] = " Incorrect details";
			header( 'Location: login.php' ) ;
			
		}
	}
	

?>
