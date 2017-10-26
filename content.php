<?php
include("db.php");
?>
<html>
	<head>
		<title>Shobhit Marketing</title>
	</head>
<style type="text/css">
	#content
	{
	width:80%;
	float:left;
	}
	* 
	{
	box-sizing:border-box;
	}
	.slideshow-container 
	{
	  position: relative;
	  margin: auto;
	}
	.mySlides
	{
		display: none;
	}
	.prev, .next 
	{
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  margin-top: -22px;
	  padding: 16px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	}
	.next 
	{
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}
	.prev:hover, .next:hover 
	{
	  background-color: rgba(0,0,0,0.8);
	}
	.text 
	{
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}
	.fade 
	{
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}
	@-webkit-keyframes fade 
	{
	  from {opacity: .4} 
	  to {opacity: 1}
	}
	
	@keyframes fade 
	{
	  from {opacity: .4} 
	  to {opacity: 1}
	}
	</style>
<body>
<div id="content">
	<div class="slideshow-container">
  		<div class="mySlides fade">
			<img src="download 1.jpg" style="width:100%; max-height:400px;">
                <div class="text">Image 1</div>
                </div>
			<div class="mySlides fade">
                <img src="download 2.jpg" style="width:100%; max-height:400px;">
                <div class="text">Image 2</div>
			</div>

		  <div class="mySlides fade">
			<img src="download 3.jpg" style="width:100%; max-height:400px;">
			<div class="text">Image 3</div>
		  </div>

		  <a class="prev" onClick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onClick="plusSlides(1)">&#10095;</a>
		</div>
       </div> 
    
<script type="text/javascript">
	
	var slideIndex = 1;
	showSlides(slideIndex);
	
	function plusSlides(n) 
	{
	  showSlides(slideIndex += n);
	}
	
	function currentSlide(n) 
	{
	  showSlides(slideIndex = n);
	}
	
	function showSlides(n) 
	{
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	   if (n < 1) {slideIndex = slides.length};
	  for (i = 0; i < slides.length; i++) 
	  {
	  	slides[i].style.display = "none"; 
	  }
	  if (n > slides.length) {slideIndex = 1} 
	 
	  slides[slideIndex-1].style.display = "block";
	  setTimeout(showSlides, 2000); // Change image every 5 seconds 
	  }
</script>    
</body>
</html>
