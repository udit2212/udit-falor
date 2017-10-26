<?php
include("db.php");
$name=$_POST['gname'];
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='thumbnail/';
$query="insert into gallerydetails (name,thumbnail) values('$name','$img_name')";
if(move_uploaded_file($img_tmp, $location.$img_name))
{
chmod($location.$img_name, 0777);
}
if(mysql_query($query))
	{
		header('Location:galleryindex.php');
	}
else
	echo "not ok";
?>
