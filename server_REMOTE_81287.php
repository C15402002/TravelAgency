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
	$
}


?>