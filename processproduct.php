<?php
session_start();
require("connect.php");



if(isset($_POST['add_product_btn']))
{
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
   
    $status= isset($_POST['status']) ?'1':'0';

	
	
	
     $image=$_FILES['image']['name'];
   
   $path = "../image";
   $image_ext = pathinfo($image, PATHINFO_EXTENSION);
   $filename = time().'.'.$image_ext;
	
$product_query = "INSERT INTO product
(name,slug,description,meta_title,meta_description,status,image)

VALUES('$name','$slug','$description','$meta_title','$meta_description','$status','$filename')";
	
$product_query_run=mysqli_query($conn,$product_query);
	
if($product_query_run)
{
    move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
  	header('location: Addproduct.php');

}  
else
{
	echo "Error:" . $product_query . "<br>".$conn->error;
		
};
	
}


?>