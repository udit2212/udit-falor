<?php
include("db.php");
$id=$_GET['vid'];
$query="delete from cart where id=".$id;
if(mysql_query($query))
{
	header("Location:myorder.php");
}
else
	echo "not ok";
?>