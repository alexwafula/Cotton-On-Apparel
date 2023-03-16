<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product | Admin</title>
	<link rel="shortcut icon" href="images/logo.png" width="12px">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<script src=""></script>
		<!---header--------->
	
					
   <div class="header">

        <nav>
            <a href="index.html"><img src='images/logo.png' width="125px"></a>

            <ul id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.html">Add Category</a></li>
                <li><a href="account.php">Account</a></li>
				<li><a href=Addproduct.html>Add Product</a></li>

            </ul>


	   </nav>
	</div>
	
	
	
		<!---  Product Container--------->
	


	<div class="ccontainer">
	
	
	<form action="processproduct.php" method="post" enctype="multipart/form-data">
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
				</div>
			</div>
		</div>
	 
		<div class="card-body">
			<div class="row">
			</div>
		</div>
		<div class="card header">
			<h3>Add Product</h3>
			
		</div>
		
		
		<div class="formm-container">
		
		 
		
			<div class="col-md-6">
			<label for="">Name</label>
			<input type="text" name="name" placeholder="Enter Product Name" class="form-control">
		</div>
		<div class="col-md-6">
			<label for="">slug</label>
			<input type="text" name="slug" placeholder=" Enter slug" class="form-control">
		</div>
		
		<div class="col-md-12">
			<label for="">Description</label>
			<textarea rows="3" name="description" placeholder=" Enter description" class="form-control">
			</textarea>
		</div>
		<div class="col-md-12">
			<label for="">Upload Image</label>
			<input type="file" name="image"  class="form-control">
		</div>
		<div class="col-md-12">
			<label for="">Meta Title</label>
			<input type="text" name="meta_title" placeholder="Enter meta title" class="form-control">
		</div>
		<div class="col-md-12">
			<label for="categories">Category</label>
			<select name="categories" id="categories">
				<?php 

				require("connect.php");

               $sql = "SELECT * FROM `categories`";
               $all_categories = mysqli_query($conn,$sql);
              ?>

                 <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $category["category_id"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $category["name"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
                
            
                
              </select>

		</div>
		<div class="col-md-6">
			<label for="">Status</label>
			<input type="checkbox" name="status"  class="form-control">
		</div>
		<div class="col-md-12">
		
			<button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
		</div>
			
		</div>
		
		
		
		
	</form>
		
		
	</div>










</body>

</html>
