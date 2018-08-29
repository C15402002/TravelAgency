<?php
	session_start();
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());
if (isset($_POST['search']))
	{
	$country = $_POST['country'];
	$_SESSION["Update"]=$country;
	$result = mysqli_query($db,"SELECT * FROM place WHERE country= '$country'");
	while($row = mysqli_fetch_array($result))
	{
		echo ("<b>Title:</b> {$row['country']}</br></br>");
		echo ("<b>Author:</b> {$row['city']}</br></br>");
	
	}
}
?>
