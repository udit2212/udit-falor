<?php
include("db.php");
$id=$_POST['hide'];
if(!empty($_FILES['image']['name']))
{
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='thumbnail/';
$query1="Update gallerydetails SET thumbnail='$img_name' where id=".$id;
mysql_query($query1) or die(mysql_error());
if(move_uploaded_file($img_tmp , $location.$img_name))
{
chmod($location.$img_name, 0777);
}
}
$gname=$_POST['gname'];
$query="UPDATE gallerydetails SET name='$gname' where id=".$id;
$queryex=mysql_query($query) or die(mysql_error());
if($queryex)
{
	header('Location:galleryindex.php');
}
else
	echo "not ok";
?>