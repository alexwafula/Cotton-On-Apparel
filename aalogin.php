<?php
  session_start();


require("connect.php");

if(isset($_POST['add_admin_btn']))
{

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM  `adminlogin` WHERE  username ='$username' AND password= '$password'";

$query = mysqli_query($conn,$sql);

    $row = mysqli_num_rows($query);
        if($row == 1)
        {
            echo "login successful";
            $_SESSION['username'] = $username;
            header('location:admin.php');
        }
        else
        {
            echo "login failed";
            header('location:admin.php');
        }


}


?>