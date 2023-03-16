<!DOCTYPE html>
<html>
<head>
	<title>View Orders | Cotton On Apparel</title>
	<link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/logo.png" width="12px">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<p><h3>Orders</h3></p>
	
<table>
<tr>
<th>name</th>
<th>numbe</th>
<th>email</th>
<th>method</th>
<th>flat</th>
<th>street</th>
<th>city</th>                       
<th>state</th>
<th>country</th>
<th>pin_code</th>


<th colspan="2" align="center">operations</th>
</tr>

<?php
require('connect.php');
$sql = "SELECT * FROM  `order`;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

            

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['numbe']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['method']; ?></td>

                    <td><?php echo $row['flat']; ?></td>

                    <td><?php echo $row['street']; ?></td>

                    <td><?php echo $row['city']; ?></td>

                    <td><?php echo $row['state']; ?></td>

                    <td><?php echo $row['country']; ?></td>

                    <td><?php echo $row['pin_code']; ?></td>

    
                    <td><a class="" href=".php">Update</a>&nbsp;<a class="" href="">Delete</a></td>

                    </tr>                       

        <?php       }
        
            }

        ?> 



  
	    

</table>               

    
</body>
</html>