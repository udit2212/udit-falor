<?php
include("db.php");
if(isset($_SESSION['user_id']))
{
		$totalorder=$_GET['totalorder'];
		if($totalorder >> ($a))
		{
		$id=$_SESSION['user_id'];
		$query1="select sum(mrp) as total from cart where userid='".$id."' AND status='0'";
		$resquery=(mysql_query($query1));
		$row1=mysql_fetch_array($resquery);
		$query="select * from signupform where id=".$id;
		$resq=(mysql_query($query));
		$row=mysql_fetch_array($resq);
		}
		else
		{
			header('location:myorder.php');
		}
}
else
{
	header('location:index.php');
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
}
.card-container.card {
    max-width: 350px;
    padding: 25px 40px;
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
        <h1>Final Order and Address Details</h1>
            <form class="form-signin" action="savefinalorder.php" method="post" enctype="multipart/form-data">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name']; ?>" autofocus>
            <label for="mobile">Mobile Number</label>
            <input type="text" id="mobile" name="mobile" class="form-control" value="<?php echo $row['mobile']; ?>">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>">
            <label for="totalprice">Total price to be paid</label>
            <input type="text" name="totalprice" class="form-control" value="<?php echo $row1['total']; ?>">
            <input type="hidden" name="totalorder" value="<?php echo $totalorder; ?>">
            <input type="hidden" name="email" value="<?php echo $row['email']; ?>">
            <br>
            <center><a href="myorder.php"><button class="btn btn-lg btn-info btn-signin" type="button">Back</button></a>
            <button class="btn btn-lg btn-info btn-signin" type="submit">Submit</button></center>
            </form>
        </div>
    </div>
</body>
</html>