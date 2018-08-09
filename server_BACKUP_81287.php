<?php

session_start();

$fname ="";
$sname =""
$username ="";
$telephone ="";
$email ="";
$errors =array();

$db = mysqli_connect('localhost', 'root', '','');

//register
if(isset($_POST['reg_submit'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
<<<<<<< HEAD
	$password_1 = mysqli_real_escape_String($db, $_POST)
=======
	$
>>>>>>> cc8ea7a9b66d02832423211ae76e9f289dca67a4
}


?>