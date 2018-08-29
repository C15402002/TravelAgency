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
				echo "The two passwords do not match";
  			}

  $user_check_query = "SELECT * FROM customer WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

    if ($user['username'] === $username) {
      echo "Username already exists";
    }
    if ($user['username'] != $username){
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customer (fname, sname, email, telephone, username, password)
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password')";
  	
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
			$_SESSION['loggedIn'] = true;
			header('location: customer.php');
			return;
  }
  else{
  	
			$_SESSION['error'] = "Incorrect username/password";
			return;
  }

	}
?>

