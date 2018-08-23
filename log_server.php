<?php
	session_start();

	
	$db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());


if (isset($_POST['log_submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$result = mysqli_query($db,"SELECT * from customer where username = '$username'
		and password = '$password'");
		
		if (mysqli_num_rows($result) != 0)
		{
			$_SESSION['username'] = $username;
			$_SESSION['loggedIn'] = true;
			header( 'Location: customer.php' ) ;
			return;
			
		}
		else
		{
			$_SESSION['error'] = "Incorrect username/password";
			return;
			
		}
	}
	

?>
