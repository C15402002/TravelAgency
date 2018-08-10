<?php

session_start();

$fname ="";
$sname ="";
$username ="";
$telephone ="";
$email ="";
$errors =array();

$db = mysqli_connect('localhost', 'root', '','vaykay');

//register
if(isset($_POST['reg_submit'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$sname = mysqli_real_escape_string($db, $_POST['sname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$telephone = mysqli_real_escape_string($db, $_POST['telephone']);

	if(empty($username)) {
		array_push($errors, "Username is required");
	}

	if(empty($password_1)){
		array_push($errors, "Password is required");
	}

	if($password_1 != $password_2){
		array_push($errors, "The two passwords do not match");
	}

	if(empty($fname)) {
		array_push($errors, "First name is required");
	}

	if(empty($sname)) {
		array_push($errors, "Surname is required");
	}

	if(empty($email)) {
		array_push($errors, "Email is required");
	}

	if(empty($telephone)) {
		array_push($errors, "Phone number is required");
	}

	$user_check = "SELECT * FROM customer WHERE username ='$username' OR email ='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check);
	$user = mysqli_fetch_assoc($result);

	if($user){
		if($user['username'] == $username){
			array_push($errors, "Username already exists");
		}
		if($user['email'] == $email){
			array_push($errors, "Email already exists");
		}
	}
	if(count($errors) == 0){
		$password = md5($password_1);

		$query = "INSERT INTO customer (fname, sname, email, telephone, username, password
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password')";
			mysqli_query($db, $query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully signed up!";

			header('location: customer.php');
	}


}


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



?>