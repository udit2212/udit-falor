<?php
session_start();
mysql_connect("localhost","root","12345");
mysql_select_db("formdata");
$id=$_GET['sid'];
$query="select * from productdetails where id=".$id;
$resq=(mysql_query($query));
$row=(mysql_fetch_array($resq));
?>
<html>
<head>
  <title>Shobhit Marketing</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body
  {
	  font-size:18px;
	  font-family:"Comic Sans MS", cursive;
  }
  .navbar-default .navbar-nav
  {
	  text-align:right;
  }
  .navbar-brand
  {
    height: 105px;
    font-size: 18px;
	padding: 0px 0px;
  }
  .navbar
  {
	  background-color:#F00;
	  border-color:#F00;
	  margin-bottom: 0;
	  border: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a 
  {
      color: #f4511e !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
.jumbotron
  {
	  background-color:#F00;
	  padding:100px 25px;
	  padding-bottom:50px;
	  margin-bottom:0;
  }
    .container-fluid {
    padding: 60px 40px;
}
hr
{
	display:block;
	background-color:#0F0;
	border-top:0;
	height: 2px;
}
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 480px) 
  {
	  .navbar-brand
	  {
		  width:100px;
		  height:100px;
	  }
	  .jumbotron {
		padding-top: 75px;
		padding-bottom: 48px;
	}
  }
  @media screen and (min-width: 768px)
  {
	  .navbar-nav 
	  {
		  float: left;
		  margin: 0;
	  }
	  .nav
	  {
		  height:105px;
		  padding-top:25px;
	  }
	   .container 
	  {
		  height: 105px;
	  }
	  .navbar-header
	  {
		  height:105px;
		  margin-right:0;
		  margin-left:0;
	  }
  }  
</style>
</head>
<body id="myPage">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      		<a class="navbar-brand" href="index.php#myPage"><img src="logo.jpg" width="105px" height="105px" class="img-responsive"></a>
   			</div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php#allproducts">PRODUCTS</a></li>
                 <li><a href="index.php#gallery">GALLERY</a></li>
                <li><a href="index.php#about">ABOUT</a></li>
                <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
  			</div>
        </div>
	</nav> 

	<div class="jumbotron text-center">
      <h1>Shobhit Marketing</h1> 
      <p>We specialize in dealing of Sprinkler Stand, Clip and Foot Batten and other Sprinkler Accesories</p> 
          <form class="form-inline" action="">
            <div class="input-group">
              <input type="email" class="form-control" size="50" placeholder="Email Address" required>
              <div class="input-group-btn">
                <button type="button" class="btn btn-primary">Subscribe</button>
              </div>
            </div>
          </form>
	</div>
    
<div class="row bg-danger" style="height:80px; padding-top:25px; margin:0; width:220px; float:right;">
<?php
				if(isset($_SESSION['user_name']))
				{?>
                <li class="dropdown" style="list-style-type:none">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome <?php echo $_SESSION['user_name']; ?>
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="myorder.php">Your Orders</a></li>
                      <li><a href="account.php">Account</a></li>
                      <li><a href="password.php">Change Password</a></li>
                      <li><a href="logout.php">Logout</a></li>
                    </ul>
             	 </li>
                <?php
				}
				else
				{
				?>
                <li class="text-center" style="list-style-type:none; font-size:20px;"><a href="login.php">SIGNUP/LOGIN</a></li>
				<?php
                }
				?>
</div>

<div class="container-fluid">
	<div class="row" style="padding-top:50px;">
		<div class="col-lg-4" style="padding-top:150px;">
			<img src="../shobhitmarketing/images/<?php echo $row['image']; ?>" width="400px;">
		</div>
		<div class="col-lg-5">
    		<b><?php echo $row['name']; ?></b>
    		<hr>
            <form action="cart.php" method="POST" enctype="multipart/form-data">
              Price in Kg: Rs.<?php echo $row['mrpkg']; ?> /kg
              <br>
              Price in Piece: Rs.<?php echo $row['mrppiece']; ?> /piece
              <br>
              (Inclusive of all taxes)
              <br>
              <h3>Product Details: </h3>
              <br>
              <b>Size: </b>
              <?php echo $row['size']; ?>
              <br>
              <br>
              <b>Type: </b>
              <?php echo $row['type']; ?>
              <br>
              <br>
			  <?php echo $row['description']; ?>
              <br>
              <br>
              Select in kg or pieces :
              <input type="radio" name="type" value="kg" checked> Kg
              <input type="radio" name="type" value="pieces"> Pcs
              <br>
              <br>
              Enter No. of Pieces/Weight in Kg: 
              <input type="text" name="weight" class="form-control" style="width:auto" required>
              <br>
              Enter size in mm:
              <br>
              <input type="text" name="size" class="form-control" style="width:auto" required>
    	</div>
    	<div class="col-lg-3" style="padding-top:60px;">
        	<div class="panel panel-default">
        	<center>
        		<div class="panel-body">To buy, select Type and No in the box
        			<br>
                    <br>
                    <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
                    <input type="hidden" name="pricekg" value="<?php echo $row['mrpkg']; ?>">
                    <input type="hidden" name="pricepiece" value="<?php echo $row['mrppiece']; ?>">
        			<button type="submit" style="padding:0; border:0;"><img src="Add to Cart.PNG"></button>
                    <br>
                    </form>
        		</div>
            </center>
       		</div>
    	</div>
	</div>
</div>
    
</body>
</html>    