<?php
	session_start();
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


		$password = md5($password_1);
	$query = "INSERT INTO customer (fname, sname, email, telephone, username, password)
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully signed up!";

		if (mysqli_query($db, $query))
		{
    		echo "New record created successfully";
		}
		else
		{
    		echo "Error: " . $query . "<br>" . mysqli_error($db);
		}



	}
?>




}

<!-----login 

if(isset($_POST['log_submit'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)){
		array_push($errors, "Username is required");
	}

	if(empty($password)){
		array_push($errors, "Password is required");
	}

	if(count($errors) == 0){
		$password = md5($password);
		$query = "SELECT * FROM customer WHERE username = '$username' AND password ='$password'";
		$results = mysqli_query($db, $query);
		if(mysqli_num_rows($results) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully logged in!";
			header('location: customer.php');
		} else{
			array_push($errors, "Wrong username/password combination");
		}

	}
}



?>---->