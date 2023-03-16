<?php

require("connect.php");

$id = $_POST['edituser'];

if (isset($_POST['update_user'])) {
  $sql = "SELECT * FROM user where userId='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

 $username = $_POST["Username"];
$email = $_POST["Email"];
$password = $_POST["Password"];

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Edit Product</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">
    <h1>Cotton On</h1>
    <p>
    <h1>EDIT USERS</h1>
    </p>

  </div>
  <br />
  <br />
  <form action="edituser.php" method="POST" enctype="multipart/form-data">
    <input type="number" id="userId" name="userId" value=<?php echo "$userID"; ?> readonly required>

    <input type="text" id="firstName" placeholder="firstName" name="firstName" value=<?php echo "$firstName"; ?> readonly required>


    <br>
    <br>

    <textarea id="des" placeholder="email" name="Email_Address" contenteditable="true"><?php echo "$email"; ?></textarea>

    <br>
    <br>
    <input type="number" id="Phone_Number" placeholder="Phone Number" contenteditable="true" name="Phone_Number" value=<?php echo "$phone"; ?> >

    <input class="btn" id="add-btn" type="submit" value="Update User" name="AddUser">
    <br>
    <br>


    </div>

  </form>



</body>

</html>