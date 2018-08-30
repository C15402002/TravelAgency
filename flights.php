<html>
	<head>
	</head>
	<style>
	body {
    background-image: url("Search.jpg");
    background-repeat: no-repeat;
    background-size:cover;
	}
	form{
	font-family:American Typewriter; 
	text-shadow : 2px 2px #4d004d;
	}
	a{
   		position: absolute; 
	font-family:American Typewriter; 
	left:30px;
	top:10px;
	}
	p1{
	font-family:American Typewriter;
	color:rgb(102,0,102); 
	}
	
    </style>
    <body>
    <body background="Search.jpg">
	<center><form method="post">
		<br><b><p><font font size="6" color="#b300b3">Search for a Book </font></p></b><br>
			<input type="text" name="search" style="height:25px;width:200px;"></form><br><br></h1>
	</center></body>
	<a href="Logout.php" ><font color="#4d004d" ><b>Log Out</b></a></font>
</html>

<?php

	$db = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
	mysqli_select_db($db, "vaykay") or die("Failure to connect");
	
	if(isset($_POST['search']))
	{
		$s = $_POST['search'];
		
		$sql="SELECT country, city, price FROM TOUR WHERE  COUNTRY LIKE '%" . $s . "%' OR CITY LIKE '%" . $s  ."%'";
		$results = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($results) != 0)
		{	
			while($row = mysqli_fetch_array($results))
			{
            	$country = $row['country'];
            	$city=$row['city'];
                $price  =$row['price'];

			
				echo ("<p1><center><b>ISBN:</b> {$row['country']}</br>");
			    echo ("<b>Book Title:</b> {$row['city']}</br>");
				echo ("<b>Author:</b> {$row['price']}</br></b><br></p1>");

				echo ("<form method='post' action='Reserve.php'><input type='hidden' name='ISBN' value='{$row['ISBN']}'>");
				echo ("<input type='submit' value='Reserve' name='Reserve'></form></center>");
			}
		}
		else
		{
		echo "<center><p1>No matching book of that title/author.</p1></center>";
		}
	}
?>
