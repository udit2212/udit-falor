<?php
include("db.php");

if(isset($_SESSION['user_name']))
{
	header('location:index.php');
}

if($_POST)
{

	$a=$_POST['mail'];
	$b=$_POST['password'];

	$query="select * from inputform where email='".$a."' and password='".$b."'";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	if(is_array($row))
	{
		$_SESSION['user_id']=$row['id'];
		$_SESSION['user_name']=$row['name'];
		$_SESSION['user_image']=$row['image'];
	}
	else
	{
		echo "<script>alert('User name or password is incorrect')</script>";
	}

	if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_image']))
	{
		header("location:index.php");
	}
}
?>

<html>
<head>
	<title>Untitled Document</title>
</head>
<style type="text/css">
			#content
			{
			width:80%;
			float:left;
			}
			.inner
			{
			margin:10px;
			margin-top:0px;
			}
	</style>
<body>
	<center><h1>Login</h1>
<br />
	<div id="content">
			<div class="inner">
		<form action="" method="post" enctype="multipart/form-data">
		Email: 
		<input type="text" name="mail" />
		<br />
		Password:
		<input type="password" name="password" />
		<br>
		<br>
		<input type="submit" value="SIGNIN" name="submit" />
		</form>
		<br>
		If you are not registered, <a href="link2.php" style="font-size:12px;">CLICK HERE</a></center>
			</div>
	</div>
</body>
</html>