<?php
include("db.php");
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='images/';
$id=$_POST['pid'];
$name=$_POST['pname'];
$size=$_POST['size'];
$type=$_POST['type'];
$desc=$_POST['pdes'];
$mrpkg=$_POST['mrpkg'];
$mrppcs=$_POST['mrppcs'];
$category=$_POST['category'];
$query="insert into productdetails (pid,name,size,type,description,image,category,mrpkg,mrppiece) values('$id','$name','$size','$type','$desc','$img_name','$category','$mrpkg','$mrppcs')";
move_uploaded_file($img_tmp, $location.$img_name);
if(mysql_query($query))
	{
		header('Location:link4.php');
	}
else
	echo "not ok";
?>
