<?php
include("db.php");
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='categoryimages/';
$id=$_POST['cid'];
$name=$_POST['cname'];
$parent=$_POST['parent'];
$query="insert into categorydetails (cid,name,parent,image) values('$id','$name','$parent','$img_name')";
if(move_uploaded_file($img_tmp, $location.$img_name))
{
chmod($location.$img_name, 0777);
}
if(mysql_query($query))
	{
		header('Location:categorylink.php');
	}
else
	echo "not ok";
?>
