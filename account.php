<?php
session_start();
include("db.php");
$a=$_SESSION['user_id'];
$query="select * from signupform where id=".$a;
$resq=(mysql_query($query));
$row=mysql_fetch_array($resq);
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
        <center><img src="logo.jpg" class="img-circle" height="100" width="100"></center>
            <form class="form-signin" action="update.php" method="post" enctype="multipart/form-data">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" value="<?php echo $row['name']; ?>" required autofocus>
            <label for="mobile">Mobile Number</label>
            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number" value="<?php echo $row['mobile'];?>"required>
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $row['address']; ?>" required>
            <label for="email">Email Address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="<?php echo $row['email']; ?>" disabled>
            <input type="hidden" name="hide" value="<?php echo $row['id']; ?>">
            <br>
            <button class="btn btn-lg btn-info btn-block btn-signin" type="submit">Update</button>
            </form>
            <br>
            Already Have an Account? <a href="login.php">Sign In</a>
        </div>
    </div>
</body>
</html>