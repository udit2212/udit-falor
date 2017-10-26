<?php
include("db.php");
if($_POST)
{
	$error=0;
	if(empty($_POST['fname']))
	{
		$nameErr="Name should not be blank";
		$error=1;
	}
	if(!preg_match("/^[a-zA-Z ]*$/",$_POST['fname']))
	{
		  $nameErr = "Only letters and white space allowed"; 
		  $error=1;
	}
	if($error==0)
	{
		$name=$_POST['fname'];
		$age=$_POST['age'];
		$state=$_POST['state'];
		$gender=$_POST['gender'];
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$mail=$_POST['email'];
		$pass=$_POST['pass'];
		$_SESSION['emailid']=$mail;
		$_SESSION['password']=$pass;
		$img_name=$_FILES['photo']['name'];
		$img_size=$_FILES['photo']['size'];
		$img_type=$_FILES['photo']['type'];
		$img_tmp=$_FILES['photo']['tmp_name'];
		$pos=strpos($img_name,'.')+1;
		$extension=substr($img_name,$pos);
	if(isset($img_name))
	{	
		if(!empty($img_name) && $extension=='jpeg' || $extension=='jpg' || $extension=='png')
		{
				$location='images/';
				if(move_uploaded_file($img_tmp , $location.$img_name))
				{
					echo 'uploded';
				}
				else
				{
					echo 'not uploded';
				}
		}
		else
		{
			echo 'plz seleted a file or only jpeg file';
		}
}
else 
{
		echo 'Not OK';
}
		$query= "insert into inputform(name,age,state,gender,date,month,year,email,password,image) values('$name','$age','$state','$gender','$date','$month','$year','$mail','$pass','$img_name')";
		if(mysql_query("$query"))
		{
		$query1="insert into user (emailid,password) values('$mail','$pass')";
		mysql_query("$query1");
		header("Location:link3.php");
		}
		else
		{
		echo"not ok";
		}
}
}
?>

<html>
	<head>
		<title>form data</title>
	</head>
<body >
<center><h1>Form Data</h1>
	<br />
	<table border="0" align="center">
<form method="POST" enctype="multipart/form-data">
	<tr>
	<td>Name:</td>
	<td><input type="text" id="fname" name="fname" />
	<span>*<?php echo $nameErr; ?></span></td>
	</tr>
	<tr>
	<td>Age:</td>
	<td><input type="text" id="age" name="age" /></td>
	</tr>
	<tr>
	<td>State:</td>
	<td><select name="state" id="state">
	<option value="0">Select State</option>
	<option value="Rajasthan">Rajasthan</option>
	<option value="UP">UP</option>
	<option value="MP">MP</option>
	<option value="Punjab">Punjab</option>
	</select></td>
	</tr>
	<tr>
	<td>Gender:</td>
	<td><input type="radio" name="gender" value="male" />Male
	<input type="radio" name="gender" value="female" />Female
	</td>
	</tr>
	<tr>
	<td>Enter Date of Birth:</td>
	<td><select name= "date">
	
	<?php 
	for ($x = 1; $x <= 31; $x++) {
		echo '<option value="'.$x.'">'.$x.'</option>';
	} 
	?>
	
	</select>
	<select name= "month">
	
	<?php
	for ($y = 1; $y <=12 ; $y++) {
		echo '<option value="'.$y.'">'.$y.'</option>';
	} 
	?>
	
	</select>
	<select name= "year">
	
	<?php 
	for ($z = 1980; $z <= 2015; $z++)
	{
		echo '<option value="'.$z.'">'.$z.'</option>';
	} 
	?>
	
	</select>
	</td>
	</tr>
	<tr>
	<td>Email id:</td>
	<td><input type="text" name="email" /></td>
	</tr>
	<tr>
	<td>Password</td>
	<td><input type="password" name="pass" />
	</td>
	</tr>
	<tr>
	<td>Upload image:</td>
	<td><input type="file" name="photo" />
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
	<input type="submit" name="submit" value="submit" /></td>
	</tr>
	</form>
	</table>
</center>
<br />
</body>
</html>