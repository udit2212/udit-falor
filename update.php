<?php
include("db.php");
if($_POST)
{
$id=$_POST['hide'];
if(!empty($_FILES['image']['name']))
{
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='images/';
$query1="Update productdetails SET image='$img_name' where id=".$id;
mysql_query($query1);
move_uploaded_file($img_tmp , $location.$img_name);
}
$pid=$_POST['pid'];
$size=$_POST['size'];
$type=$_POST['type'];
$name=$_POST['pname'];
$desc=$_POST['pdes'];
$category=$_POST['category'];
$mrpkg=$_POST['mrpkg'];
$mrppcs=$_POST['mrppcs'];
$query="UPDATE productdetails SET pid='$pid', name='$name', size='$size', type='$type', description='$desc',category='$category', mrpkg='$mrpkg', mrppiece='$mrppcs' where id=".$id;
$queryex=mysql_query($query) or die(mysql_error());
if($queryex)
{
	header('Location:link4.php');
}
else
	echo "not ok";
}
?>