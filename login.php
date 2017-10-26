<?php
include("db.php");

if(isset($_SESSION['user_name']))
{
	header('location:index.php');
}

if($_POST)
{

	$a=$_POST['email'];
	$b=$_POST['password'];

	$query="select * from signupform where email='".$a."' and password='".$b."'";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	if(is_array($row))
	{
		$_SESSION['user_id']=$row['id'];
		$_SESSION['user_name']=$row['name'];
	}
	else
	{
		echo "<script>alert('User name or password is incorrect')</script>";
	}

	if(isset($_SESSION['user_id']) && isset($_SESSION['user_name']))
	{
		header("location:index.php");
	}
}
?>
<html>
<head>
  <title>Shobhit Marketing</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style type="text/css">
body, html {
    height: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}
.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}
.forgot-password {
    color: rgb(104, 145, 162);
}
.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}
</style> 
</head>
<body>
	<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="login.png" >
            <form class="form-signin" action="" method="post" enctype="multipart/form-data">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form>
            <br>
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
            <br>
            <br>
            <center><a href="signup.php" style="text-decoration:none"><button type="button" class="btn btn-info btn-block">Create Your Account</button></a></center>
        </div>
    </div>
</body>
</html>