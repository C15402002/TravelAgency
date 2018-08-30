<!DOCTYPE html>

<html>

  <body>


 <?php

  $db = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
  mysqli_select_db($db, "vaykay") or die("Failure to connect");
  
            
    echo '<table border="1">'."\n";
            
    $result = mysqli_query($db, "SELECT tourid, userName, DATEOFPURCHASE FROM booking");
            
    while($row = mysqli_fetch_array($result))
    {
        echo ("<p2><b><center>Purchase date:</b> {$row['DATEOFPURCHASE']}</br>");
         echo ("<b><center>Purchase tourid number:</b> {$row['tourid']}</br>");
        echo ("<form method='post' action='unBook.php'><input type='hidden' name='tourid' value='{$row['tourid']}'>");
        echo ("<input type='submit' value='Unreserve' name='Unreserve'></form></p2></center><br>");
    }
?>
 <button onclick ="location.href='customer.php'" class="button active" >My profile</button>  

 
</body>
</html>