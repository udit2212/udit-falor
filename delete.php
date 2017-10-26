<?php
include("db.php");
$id=$_GET['sid'];
$query="delete from productdetails where id=".$id;
if(mysql_query($query))
{
	header("Location:link4.php");
}
else
	echo "not ok";
?>