<?php

    $db = mysqli_connect('localhost', 'root', '') or die(mysql_error());
    mysqli_select_db($db, "vaykay") or die("Failure to connect");
    
    session_start();
    if(!isset($_SESSION['username'])){
      header("location:login.php");
     }

  $user_check = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db, "SELECT username from customer where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQL_ASSOC);
   
   $login_session = $row['username'];


  if(isset($_POST['tourid']) && isset($_POST['Book']))
    {
      $Booktour = $_POST['tourid'];
        
        $sql_query = "";

        $sql_query = "UPDATE tour SET booked = 'Y' WHERE tourid = '".$Booktour."'";  
        mysqli_query($db, $sql_query);
        
        $date = date("Y-m-d");
        
        $sql = "INSERT INTO booking (tourid, userName, DATEOFPURCHASE)
            VALUES ('$Booktour','$login_session','$date')";
            
        mysqli_query($db, $sql);
        
        echo $Booktour;
        echo"Worked";
        header("Location:result.php");
    }
    else
    {
      echo "Nope";
    }
?>