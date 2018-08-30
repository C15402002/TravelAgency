<!DOCTYPE html>
<?php include ('server.php'); ?> 
<html>
    <head>
        <meta charset="utf-8">
        <title>vaykay travels || Dublin </title>
    
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/profile.css">

    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
   <header id="header">
  <div class="center">
    <h1 class="logo"> </h1>
    <nav class="link">
      <h2 class="hidden">navigation</h2>
      <ul>
        <li><a href="main.php">Home</a></li>
        <li ><a href="about.html">About</a></li>
        <li><a href="flight.php">Flights</a></li>
        <li><a href="cruise.php">Cruise</a></li>
        <li><a href="package.php">Packages</a></li>
      </ul>
    </nav>
  </div>
</header>


<div id="adver">
  <img src="img/italy.jpg" alt="main" style="width:100%; height: 400px;">
    <hgroup>
      <h2>Search Results</h2>
    </hgroup>
</div>

<?php if (isset($_SESSION['success']) && $_SESSION['success'] == true)
	{
	
		$sql="SELECT tourname, tourtype, tourdesc, depdate, arrdate, country, city, price from tour WHERE country '". $_SESSION['country'] . "'";
		$results = mysql_query($db, $sql);
		
			while($row = mysql_fetch_array($results))
			{
            	$Tname = $row['tourname'];
            	$Type = $row['tourtype'];
                $TourDesc  = $row['tourdesc'];
                $Depdate=$row['depdate'];
				$Arrdate=$row['arrdate'];
				$Country=$row['country'];
				$City=$row['city'];
				$Price=$row['price'];

		
	
		?>

		
		

<form name="form1" method="post" action="server.php" enctype="multipart/form-data" onsubmit="return validate1();">
<input type="hidden" name="hiden" value="<?php echo $tourid; ?>" />
<fieldset>
<legend>Results</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">Tour name:</td>
    <td width="40%" value="<?php echo $Tname ;?>"></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Tour Type:</td>
    <td width="40%" value="<?php echo $Type ;?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Tour Description:</td>
    <td width="40%" value="<?php echo $TourDesc ;?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Departure date:</td>
    <td width="40%" value="<?php echo $Depdate ;?>"></td>
    <td>&nbsp;</td>
  </tr>
<tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Arrival date:</td>
    <td width="40%" value="<?php echo $Arrdate ;?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Country:</td>
    <td width="40%" value="<?php echo $country ;?>"></td>
    <td>&nbsp;</td>
  </tr>
   <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>City:</td>
    <td width="40%" value="<?php echo $city ;?>"></td>
    <td>&nbsp;</td>
  </tr>

 <tr>                                                                                                          
    <td>&nbsp;</td>
    <td>Price:</td>
    <td width="40%" value="<?php echo $price ;?>"></td>
    <td>&nbsp;</td>
  </tr>



  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="custedit" /><a href="customer.php"></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php  } } ?>