<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title>Collections / Products</title>
				 <link rel="shortcut icon" href="images/logo.png" width="12px">
			  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
				<link rel="stylesheet" href="style.css">
</head>

<body>
				<script src=""></script>

				<h1><? = $category['name'] ?></h1>
			
    <?php 
include('userfunctions.php');


$category_slug = isset($_GET['categories']);
$category_data = getSlugActive("categories",$category_slug);
$category =mysqli_fetch_array($category_data);
$cid = isset($category['id']);
require('connect.php');
$sql = "SELECT name FROM categories";
$result = $conn->query($sql);

$products = getProdByCategory($cid);

if ($result->num_rows > 0) {
            

                while ($row = $result->fetch_assoc()) {
         ?>
        
 <div class="row">
 <a href="#">
  <div class="column">
    <?php echo $row['name']; ?>

  </div>

    
</a>
  </div>
				 <?php       }
        
            }

        ?> 		


					


				
</body>





