<?php
session_start();
mysql_connect("localhost","root","12345");
mysql_select_db("formdata");
$query="select * from gallerydetails";
$resq=(mysql_query($query));
$query1="select * from categorydetails";
$resultq=(mysql_query($query1));

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
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  padding:0;
  cursor: pointer;
}
.dropdown-menu li a:hover, .dropdown-menu li.active a 
  {
      color:#F00 !important;
	  background-color:#FFF !important;
	  text-decoration:underline !important;
  }
  .dropdown-menu li a
  {
	  color:#000 !important;
	  width:auto !important;
  }
#allproducts
{
	padding-top:100px;
}
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<button id="myBtn" title="Go to top"><a href="#myPage"><img src="scroll.PNG"></a></button>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
      		<a class="navbar-brand" href="#myPage"><img src="logo.jpg" width="105px" height="105px" class="img-responsive"></a>
   			</div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php#allproducts">PRODUCTS</a></li>
                 <li><a href="#gallery">GALLERY</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
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

<div class="row bg-danger text-center" style="height:80px; padding-top:25px; margin:0; width:250px; float:right;">
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

<div id="allproducts" class="container-fluid bg-info">
<h1 style="font-family:'monotype Corsiva'; text-align:center;">Our Products</h1>
<div class="row">
	<div class="col-md-3" id="category" style="padding-top:50px;">
    		<ul class="list-group">
            <li class="list-group-item"><button class="btn btn-lg btn-danger center-block"><a href="index.php#allproducts">Show All Products</a></button>
				<?php
                while($row1=mysql_fetch_array($resultq))
                {
                ?>
                <li class="list-group-item"><a href="index.php?sid=<?php echo $row1['id'];?>"><?php echo $row1['name']; ?>
                <span class="glyphicon glyphicon-chevron-right"></span></a></li>
                <?php
					}
                ?> 
                </ul>
     </div>
     
     <div id="products" class="col-md-9 text-center">
        <div class="row slideanim" style="padding-top:10px;">
		<?php
		if($_GET)
		{
			$sid=$_GET['sid'];
			$c=0;
			$query2="select * from productdetails where category=".$sid;
			$resultquery=(mysql_query($query2));
			while($row2=mysql_fetch_array($resultquery))
			{
        ?>
            <a href="description.php?sid=<?php echo $row2['id']; ?>"><div class="col-md-4"><img src="../shobhitmarketing/images/<?php echo $row2['image']; ?>" width="200" height="200">
                <b><p style="color:#03F;"><?php echo $row2['name']; ?></p></b>
                <br>
                <p>Price in Kg: Rs<?php echo $row2['mrpkg']; ?></p>
                <p>Price in Pieces: Rs<?php echo $row2['mrppiece']; ?></p>
            </div>
            </a>
		<?php
			$c++;
			if($c%3==0)
			{
        ?>
        </div>
        <div class="row">
            <?php
                }
                }
		}
		else
		{
         $d=0;
			$query3="select * from productdetails";
			$resultquery1=(mysql_query($query3));
			while($row3=mysql_fetch_array($resultquery1))
			{
        ?>
        <a href="description.php?sid=<?php echo $row3['id']; ?>">
            <div class="col-md-4"><img src="../shobhitmarketing/images/<?php echo $row3['image']; ?>" width="200" height="200">
                <b><p style="color:#03F;"><?php echo $row3['name']; ?></p></b>
                <br>
                <p>Price in Kg: Rs<?php echo $row3['mrpkg']; ?></p>
                <p>Price in Pieces: Rs<?php echo $row3['mrppiece']; ?></p>
            </div>
         </a>   
		<?php
			$d++;
			if($d%3==0)
			{
        ?>
        </div>
        <div class="row slideanim">  
        <?php
			}
			}
		}
		?>
        </div>
    </div> 
</div>
</div>    
    

    	
<div id="gallery" class="container-fluid text-center bg-primary">
<br>
	<h1 style="font-family:'monotype Corsiva';">Gallery</h1>
    <br>
    <div class="row slideanim">
		<?php
			$i=0;
			while($row=mysql_fetch_array($resq))
			{
        ?>
        <div class="col-md-4"><a href="gallery.php?vid=<?php echo $row['id'];?>"><img src="../shobhitmarketing/thumbnail/<?php echo $row['thumbnail']; ?>" width="200" height="200"></a>
        	<p><?php echo $row['name']; ?></p>
        </div>
		<?php
			$i++;
			if($i%3==0)
			{
        ?>
	</div>
    <div class="row slideanim">
		<?php
            }
            }
        ?>
    </div>
</div> 
    
<div id="about" class="container-fluid bg-info">
<br>
<center><h2>About Us</h2></center>
<br>
  <div class="row">
    <div class="col-sm-8">
      
      <h3>Sprinkler Clamp</h3><br>
      <p align="justify">We are offering a broad array of Sprinkler Clamp, and has ISI Certification and is availaible in various size. Our clamps have won appreciation in terms of features like tensile strength, dimensional accuracy, resistance to corrosion and durability. Depending on the nature of application,Shobhit Marketing offer these clamps in relevant specifications.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
  </div>
</div>



<div id="contact" class="container-fluid bg-primary">
  <h2 class="text-center">Contact Us</h2>
  <br>
  <br>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p style="font-family:'Courier New', Courier, monospace;"><b>Address:</b> F-796, Road No. 14, Vishwakarma Industrial Area, Jaipur, Rajasthan-302039</p>
      <br>
      <p style="font-family:'Courier New', Courier, monospace;"><b>Contact No:</b> +91 9829276210 , 0141-4108541</p>
      <br>
      <p style="font-family:'Courier New', Courier, monospace;"><b>Email id:</b> shobhitmarketing2012@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
    <form action="#">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage'], a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
</script>    
</body>
</html>