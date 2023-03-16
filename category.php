<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category | Admin</title>
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
                <li><a href=All categories.html></a></li>


            </ul>


	   </nav>
	</div>
	
	
	
		<!---  Category Container--------->
	


	<div class="ccontainer">
	
	
	<form action="processcategory.php" method="post" enctype="multipart/form-data">
		
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
			<label for="">Meta Description</label>
			<input type="text" name="meta_description" placeholder="Enter meta description" class="form-control">
		</div>
		<div class="col-md-6">
			<label for="">Status</label>
			<input type="checkbox" name="status"  class="form-control">
		</div>
		<div class="col-md-12">
		
			<button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
		</div>
			
		</div>
		
		
		<div class="alert">
			<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
			<p>Category added successfully!!!</p>
			
		</div>
		
		
		
	</form>
		
		
	</div>










</body>

</html>
