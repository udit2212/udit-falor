<?php
include("db.php");
$id=$_GET['sid'];
$query="delete from categorydetails where id=".$id;
if(mysql_query($query))
{
	header("Location:categorylink.php");
}
else
	echo "not ok";
?>