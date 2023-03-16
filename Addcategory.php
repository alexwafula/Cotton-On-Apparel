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
                <li><a href="Addcategory.php">Add Category</a></li>
                <li><a href="account.php">Account</a></li>
				<li><a href=Addproduct.html>Add Product</a></li>

            </ul>


	   </nav>
	</div>
	
	
	
		<!---  Product Container--------->
	


	<div class="ccontainer">
	
	
	<form action="processcategory.php" method="post" enctype="multipart/form-data">
		
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
			<input type="text" name="name" placeholder="Enter Category Name" class="form-control">
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
			<label for="categories">Meta_description</label>
			<input type="text" name="meta_description" placeholder="Enter description" class="form-control">

		</div>
		<div class="col-md-6">
			<label for="">Status</label>
			<input type="checkbox" name="status"  class="form-control">
		</div>
		<div class="col-md-12">
		
			<button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
		</div>
			
		</div>
		
		
		
		
	</form>
		
		
	</div>










</body>

</html>
