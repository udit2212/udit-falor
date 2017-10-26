<?php
include("db.php");
$id=$_GET['pid'];
$query="delete from galleryimages where id=".$id;
if(mysql_query($query))
{
	header("Location:galleryindex.php");
}
else
	echo "not ok";
?>