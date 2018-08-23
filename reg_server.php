<?php
	session_start();
	$_SESSION['success'] = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());
	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password_1 =  $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		$fname =  $_POST['fname'];
		$sname =  $_POST['sname'];
		$email =  $_POST['email'];
		$telephone =  $_POST['telephone'];


	if ($password_1 != $password_2) {
			echo "The two passwords do not match";
		}

if (count($errors) == 0) {
			$password = md5($password_1);
	$query = "INSERT INTO customer (fname, sname, email, telephone, username, password)
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password')";

		if (mysqli_query($db, $query))
		{
    		$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully signed up!";
			header('location: customer.php');

		}
		else
		{
    		echo "Error: " . $query . "<br>" . mysqli_error($db);
		}
		
		}



	}
?>




}

