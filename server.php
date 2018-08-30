
<?php
	session_start();
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());

if (isset($_POST['search']))
	{
		$country = $_POST['country'];
		
		$sql="SELECT * from tour WHERE country where country = '$country'";
		$results = mysql_query($db, $sql);
		
		if (mysql_num_rows($results) != 0)
		{	
			$_SESSION['country'] = $country;
			header('location: result.php');
		}
		else
		{
		echo "No matching book of that title/author.";

		}
}
?>
