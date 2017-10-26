<?php
include("db.php");
if($_GET)
	{
		$a=$_GET['id'];
		$status=$_GET['status'];
		$query1="UPDATE cart SET status='".$status."' where id=".$a;
		if(mysql_query($query1))
		{
			echo "succesful";
			header('location:ordersindex.php');
		}
		else
		{
			echo "not ok";
		}
	}
?>