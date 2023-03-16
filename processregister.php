+<?php
[]]
 session_start();


require("connect.php");


$username = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];

$sql = "INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

if ($conn->query ($sql) === TRUE) 


{

    $_SESSION['success'] = "You are now logged in";
		header('location: index.php');

}


 else
{
	
};


?>



		
		
		