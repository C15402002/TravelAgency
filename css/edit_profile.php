<?php

session_start();  
  $db = mysqli_connect("localhost", "root", "", "vaykay") or die(mysqli_error()); 
if(isset($_POST['edit']))
{    
    
    $name=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];    
    
    // checking empty fields
    if(empty($name) || empty($password) || empty($email)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($db, "UPDATE customer SET username='$username',password='$password',email='$email' WHERE username=$name");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
//getting id from url
$name = $_GET['username'];
 
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT username, password, email FROM customer WHERE username=$name");
 
while($row = mysqli_fetch_array($result))
{
    $name = $row['username'];
    $age = $row['password'];
    $email = $row['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="main.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit_profile.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $username;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="password" value="<?php echo $password;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="name" value=<?php echo $_GET['username'];?>></td>
                <td><input type="submit" name="edit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>