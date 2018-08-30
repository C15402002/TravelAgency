

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


  if(isset($_POST['tourid']) && isset($_POST['Unreserve']))
    {
      $tourid = $_POST['tourid'];
        
        $sql_query = "";

        $sql_query = "UPDATE tour SET booked = 'N' WHERE tourid = '".$tourid."'";  
        mysqli_query($db, $sql_query);
        
        $date = date("Y-m-d");
        
        $sql = "DELETE FROM booking WHERE tourid ='$tourid'";
            
        mysqli_query($db, $sql);
        
        echo $tourid;
        echo"Worked";
        header("Location:profile.php");
    }
    else
    {
      echo "Nope";
    }
?>