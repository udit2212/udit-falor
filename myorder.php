<?php
include("db.php");
$id=$_SESSION['user_id'];
$query="select * from cart where userid=".$id;
$resq=(mysql_query($query));

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
      color: #F00 !important;
	  background-color:#FFF !important;
	  
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

<button id="myBtn" title="Go to top"><a href="#myPage"><img src="scroll.PNG"></a></button>

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


<div class="container">
  <h2>My Orders</h2>
  <p>Here is the List of Orders You have added to the cart</p>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>S.No.</th>
        <th>Product Name</th>
        <th>Type</th>
        <th>Weight</th>
        <th>Price</th>
		<th>Status/Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
	$total=0;
	$con=1;
	while($row=mysql_fetch_array($resq))
	{
	?>
    <tr>
        <td><?php echo $con; ?></td>
        <td><?php echo $row['productname']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td><?php echo $row['weight']; ?></td>
        <td><?php echo $row['mrp']; ?></td>
        <?php
		if($row['status'] == "orderplaced" || $row['status'] == "dispatched" || $row['status'] == "delivered")
		{
		?>
        <td><?php echo $row['status']; ?></td> 
        <?php
		}
		else
		{
		?>
        <td><a href="deleteorder.php?vid=<?php echo $row['id']; ?>">Delete Order</a></td>
        <?php
		$total++;
		}
		?>
      </tr>
      <?php
	  $con++;
	}
	?>
    </tbody>
  </table>
  </div>
  <center>
  <a href="index.php#allproducts"><button type="button" style="padding:0; margin:0;"><img src="addproduct.PNG" width="150" height="50"></button></a>
  <?php
  $b=0;
	if($total != $b)
	{
	?>
  <a href="finalorder.php?totalorder=<?php echo ($total) ; ?>"><button type="button" style="padding:0; margin:0;"><img src="orderbutton.PNG" width="150" height="50"></button></a>
  <?php
	}
	?>
  </center>
</div>

</body>
</html>      