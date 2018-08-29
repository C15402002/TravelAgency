<?php
	session_start();

	$db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());

	if(isset($_POST['reg_submit']))
	{
		$username = $_POST['username'];
		$password_1 =  $_POST['password_1'];
		$password_2 = $_POST['password_2'];
		$fname =  $_POST['fname'];
		$sname =  $_POST['sname'];
		$email =  $_POST['email'];
		$telephone =  $_POST['telephone'];
		 if ($password_1 != $password_2) {
				$_SESSION['errormsg'] = "Incorrect username/password";
			return;
  			}
		$query = "INSERT INTO customer (fname, sname, email, telephone, username, password)
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password_1')";
			
		if (mysqli_query($db, $query)){
			
    		$_SESSION['username'] = $username;
			$_SESSION['loggedIn'] = true;
			header('location: customer.php');
			return;
  		}
  		else{
  	
			$_SESSION['errormsg'] = "Incorrect username/password";
			return;
  		}

		
}

?>

