<?php
  session_start();
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error());
  $check = $_SESSION['username'];
  $query = "SELECT username from customer where username = '$check'";
  $result=mysqli_query($db,$query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $sql="DELETE FROM customer WHERE username='$check'";
  mysqli_query($db, $sql);
  if($db -> query($sql) === TRUE)
  {
    echo "<br><br>";
      echo $check;
    echo "<br><br>";
        echo "Deleted Successfully";
        echo "<br><br>";
        echo "<a href='main.php'> Back to main page </a>";
        session_destroy();
  }
  else
  {
    header("Location:customer.php");
    echo "ERROR!";
  }
?>