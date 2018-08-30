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

	if(isset($_POST['reg_submit']))
	{
		 if(isset($_POST['reg_submit']))
	{
 
 		$image=$_FILES['userfile']['name'];
 		$file_size=$_FILES['userfile']['size'];
 		$tmp_file_name=$_FILES['userfile']['tmp_name'];
 
 
		echo"<br>";
		$uploaddir='user/'.$image;
		$uploadimage=$uploaddir;//specify the full path for file;

		if(move_uploaded_file($tmp_file_name,$uploadimage))
		{
			echo"file upload successfully";
		}
		else
		{
			if($_FILES['userfile']['error']>0)
     		{
				echo"error occured";
     		}
			if($_FILES['userfile']['size']>2097151)
         	{
				echo"file size is too large";
         	}
		}// end of else
		echo"<pre>";


		echo"<p>here some debugging code</p>";
		print_r($_FILES['userfile']);
		echo"</pre>";
	}
		$username = $_REQUEST['username'];
		$password_1 =  $_REQUEST['password_1'];
		$password_2 = $_REQUEST['password_2'];
		$fname =  $_REQUEST['fname'];
		$sname =  $_REQUEST['sname'];
		$email =  $_REQUEST['email'];
		$telephone =  $_REQUEST['telephone'];


		if ($password_1 != $password_2) {
				$_SESSION['errormsg'] = "Incorrect username/password";
			return;
  			}
  	
		$query = "INSERT INTO customer (fname, sname, email, telephone, username, password, uploadimage)
			VALUES('$fname', '$sname', '$email', '$telephone', '$username', '$password_1', '$uploadimage')";
			
		if (mysqli_query($db, $query)){
			
    		$_SESSION['username'] = $username;
			$_SESSION['loggedIn'] = true;
			header('location: customer.php');
			return;
  		}
  		else{
  	
			$_SESSION['errormsg'] = "Invalid entry";
			echo "Error: " . $query . "<br>" . mysqli_error($db);
			return;
  		}

		
	}

if(isset($_POST['custedit']))
{
	//updation in costomer table;
 
	
$sql="update customer set fname='$_POST[fname]',sname='$_POST[sname]',email='$_POST[email]',telephone='$_POST[telephone]', username='$_POST[username]', password = '$_POST[password]' where custid='$_POST[hiden]'";
$result=mysqli_query($db, $sql);
if($result)
{
	echo"update successfully";
	header('location:customer.php');
}
else
{
	echo "not update";
}
}//main if


?>
	


