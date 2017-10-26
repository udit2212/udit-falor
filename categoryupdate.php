<?php
include("db.php");
$id=$_POST['hide'];
if(!empty($_FILES['image']['name']))
{
$img_name=$_FILES['image']['name'];
$img_size=$_FILES['image']['size'];
$img_type=$_FILES['image']['type'];
$img_tmp=$_FILES['image']['tmp_name'];
$location='categoryimages/';
$query1="Update categorydetails SET image='$img_name' where id=".$id;
mysql_query($query1);
if(move_uploaded_file($img_tmp , $location.$img_name))
{
chmod($location.$img_name, 0777);
}
}
$cid=$_POST['cid'];
$cname=$_POST['cname'];
$parent=$_POST['parent'];
$query="UPDATE categorydetails SET cid='$cid', name='$cname', parent='$parent' where id=".$id;
$queryex=mysql_query($query) or die(mysql_error());
if($queryex)
{
	header('Location:categorylink.php');
}
else
	echo "not ok";
?>