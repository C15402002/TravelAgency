<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo "you have been logged out";
header("location://localhost/Web/login.php"); //to redirect back to "index.php" after logging out
exit();
?>