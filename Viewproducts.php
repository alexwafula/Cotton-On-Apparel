<!DOCTYPE html>
<html>
<head>
	<title>View Products | Cotton On Apparel</title>
	<link rel="stylesheet" href="style.css">
     <link rel="shortcut icon" href="images/logo.png" width="12px">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<p><h3>Products</h3></p>
	
<table>
<tr>
<th>Name</th>
<th>Slug</th>
<th>Description</th>
<th>Meta_Title</th>
<th>Image</th>
<th>Meta_Description</th>
<th>Status</th>


<th colspan="2" align="center">operations</th>
</tr>


<?php
require('connect.php');
$sql = "SELECT * FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    
                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['slug']; ?></td>

                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['meta_title']; ?></td>
                     <td>
                     	<img src="../image/<?= $row['image']; ?>" alt="<?= $row['image'];?>">
                     	
                     </td>
                    <td><?php echo $row['meta_description']; ?></td>
                    <td>
                    	<?php echo $row['status'] == '0'? "Visible":"Hidden"; ?>
                    		
                    </td>
    
                    <td><a class="" href=".php">Update</a>&nbsp;<a class="" href="">Delete</a></td>

                    </tr>                       

        <?php       }
        
            }

        ?> 





  
	    

</table>               

    
</body>
</html>