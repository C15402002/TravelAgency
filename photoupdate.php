<?php
session_start();  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error()); 

  $sql="select custid, profileext from customer where custid='$_REQUEST[custid]'";
$result=mysqli_query($db, $sql);

while($row=mysqli_fetch_array($result))
{
	$cust=$row['custid'];
	$uploadimage=$row['profileext'];
	
	
}
 if(isset($_POST['updatephoto']))
	{
 
 $image=$_FILES['userfile']['name']; 
 $file_size=$_FILES['userfile']['size'];
 $tmp_file_name=$_FILES['userfile']['tmp_name'];
echo"<br>";
$uploaddir='user/'.$image;
$uploadimage=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$uploadimage))
{
	
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

$sql ="update customer set profileext ='$uploadimage' where custid='$_POST[custid]'";
$result=mysqli_query($sql) ;


	}


?>