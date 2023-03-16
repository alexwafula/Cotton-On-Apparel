<!DOCTYPE html>
<html>
<head>
	<title>View Users | Cotton On Apparel</title>
	<link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" href="images/logo.png" width="12px">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<p><h3>Users</h3></p>
	
<table>
<tr>
<th>Username</th>
<th>Email</th>
<th>Password</th>

<th colspan="2" align="center">operations</th>
</tr>

<?php
require('connect.php');
$sql = "SELECT username, email,password FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    
                    <td><?php echo $row['username']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['password']; ?></td>

    
                    <td><a class="" href=".php">Update</a>&nbsp;<a class="" href="">Delete</a></td>

                    </tr>                       

        <?php       }
        
            }

        ?> 



  
	    

</table>               

    
</body>
</html>