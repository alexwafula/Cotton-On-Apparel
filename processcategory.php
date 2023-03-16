<?php
session_start();
require("connect.php");



if(isset($_POST['add_category_btn']))
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
	
	
$cate_query = "INSERT INTO categories
(name,slug,description,meta_title,meta_description,status,image)

VALUES('$name','$slug','$description','$meta_title','$meta_description','$status','$filename')";
	
$cate_query_run=mysqli_query($conn,$cate_query);
	
if($cate_query_run)
{
  move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
	  	header('location: Addcategory.php');

  
}  
else
{
	echo "Error:" . $cate_query . "<br>".$conn->error;
		
};
	
}


?>