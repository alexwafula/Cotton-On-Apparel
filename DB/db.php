<?php
$conn = mysqli_connect("localhost","root","","cotton on");

if($conn)
{
	echo "connection ok";
}
else
{
	die("Connection failed because".mysqli_connect_error());
}

$stmt = $conn->prepare("insert into user registeration(username, email, password)values(?,?,?)");
$stmt->bind_param("sss",$username, $email, $password);
$stmt->execute();
echo "Registeration Succesful...";
$stmt->close();
$conn->close();

 
?>
