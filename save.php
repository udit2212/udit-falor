<?php
include("db.php");
if($_POST)
{
if(empty($_POST['fname']))
{
$nameErr="Name should not be blank";
exit();
}
if(!preg_match("/^[a-zA-Z ]*$/",$_POST['fname']))
{
      $nameErr = "Only letters and white space allowed"; 
	  exit();
}
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

$query= "insert into inputform (name,age,state,gender,date,month,year,email,password) values('$name','$age','$state','$gender','$date','$month','$year','$mail','$pass')";
if(mysql_query("$query"))
{
$query1="insert into user (emailid,password) values('$mail','$pass')";
mysql_query("$query1");
header("Location:login.php");
}
else
{
echo"not ok";
}
}
?>