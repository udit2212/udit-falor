<?php
include("db.php");
if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
$vid=$_GET['vid'];	
$qry="select * from galleryimages where galleryid=".$vid;
$rec=(mysql_query($qry));	
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
			.link
			{
			position: absolute;
			bottom: 3;
			left: 0;
			text-decoration:none;
			}
			.li
			{
			list-style-type:none;
			float:left;
			position:relative;
			}
			.alink
			{
			float:none;
			}
	</style>
<body>
	<div id="content">
	<center>
			<h2>Gallery Images</h2></center>
		<ul>			
				<?php
					$con=1;
					while($rs=mysql_fetch_array($rec))
					{ 
				?>
					<li class="li">
					<img src="galleryimages/<?php echo $rs['image'];?>" width="300" height="250" />
					<a href="imagedelete.php?pid=<?php echo $rs['id'];?>" class="link"><img src="delete.jpg" width="30" height="30"></a>
					</li>
				<?php  } ?>
		</ul>
		</div>	
				<center><a href="imageadditionindex.php?id=<?php echo $vid; ?>" class="alink" style="font-size:20px;">Add Image</a></center>		
	
</body>
</html>