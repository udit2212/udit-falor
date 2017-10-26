<?php
mysql_connect("localhost","root","12345");
mysql_select_db("formdata");
$id=$_GET['vid'];
$query="select * from galleryimages where galleryid=".$id;
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
	  margin:0;
  }
.carousel-inner img {
    margin: auto;
}

.carousel-caption {
    color: #FF0 !important;
	font-family:"monotype Corsiva";
	padding-bottom:0px;
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
<body id="mypage">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      		<a class="navbar-brand" href="index.php#mypage"><img src="logo.jpg" width="105px" height="105px" class="img-responsive"></a>
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
                      <li><a href="#">Your Orders</a></li>
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

              
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin:85px;">
	<div class="carousel-inner" role="listbox">
	  <?php
	  $i=1;
       while($row=mysql_fetch_array($resq))
	   {
		   if($i==1)
		   {
	?>
        <div class="item active">
          <img src="../shobhitmarketing/galleryimages/<?php echo $row['image']; ?>" style=" max-height:400px;" alt="no image">
              <div class="carousel-caption">
                <h3><?php echo $row['name']; ?></h3>
              </div> 
        </div>
        <?php
   		}
		else
		{
   	?>
    <div class="item">
          <img src="../shobhitmarketing/galleryimages/<?php echo $row['image']; ?>" style="max-height:400px;" alt="no image">
              <div class="carousel-caption">
                <h3><?php echo $row['name']; ?></h3>
              </div> 
        </div>
        <?php
		}
		$i++;
	   }
	   ?>
	
</div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>

</body>
</html>    