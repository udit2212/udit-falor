<?php
include("db.php");
$id=$_GET['sid'];
$query="delete from gallerydetails where id=".$id;
if(mysql_query($query))
{
	header("Location:galleryindex.php");
}
else
	echo "not ok";
?>