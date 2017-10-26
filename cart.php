<?php
include("db.php");
if($_POST)
{
	if(isset($_SESSION['user_name']))
	{
		$name=$_POST['name'];
		$pricekg=$_POST['pricekg'];
		$pricepiece=$_POST['pricepiece'];
		$type=$_POST['type'];
		$weight=$_POST['weight'];
		$size=$_POST['size'];
		if($type == "pieces")
		{
			$mrp=($pricekg*$weight);
		}
		else
		{
			$mrp=($pricepiece*$weight);
		}
		$user=$_SESSION['user_name'];
		$id=$_SESSION['user_id'];
		$query="select * from signupform where id=".$id;
		$resq=(mysql_query($query));
		$row=(mysql_fetch_array($resq));
		$mobile=$row['mobile'];
		$address=$row['address'];
		$email=$row['email'];
		$query1= "insert into cart (userid,user,productname,type,weight,size,mrp,mobile,address,email) values('$id','$user','$name','$type','$weight','$size','$mrp','$mobile','$address','$email')";
		if(mysql_query($query1))
		{
			header('location:myorder.php');
		}
		else
		{
			echo "not ok";
		}
	}
	else
	{
		header('location:login.php');
	}
}	
?>