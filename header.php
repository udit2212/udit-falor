<html>
	<head>
		<title>Shobhit Marketing</title>
	</head>
	<style type="text/css">

	.heading
	{
		width:100%;
		height:110px;
		background-color:#000099;
		color:#FF0000;
		margin:0;
		font-size:25px;
		text-align:center;
		font-family:"Monotype Corsiva";
		font-style:italic;
	}
	.left-logo
	{
		float:left;
		width:20%;
		height:5px;
		margin-left:0px;
		padding-left:0px;
		}
	
	.right-logo
	{
		float:right;
		padding-top:0px;
		padding-right:10px;
	}
	
	a.logout:link, a.logout:visited
	{
	color:#00FF00;
	font-size:20px;
	font-family:"Times New Roman", Times, serif;
	float:right;
	padding-right:0;
	text-decoration:none;
	}
	
	</style>
	<body>
		<header class="heading">
			<div class="left-logo">
				<img src="logo.jpg" width="110" style="padding-top:2px; padding-left:1px;" />
			</div>
			<div class="right-logo">
			<?php
			if(isset($_SESSION['user_image']))
			{?>
			<img src="images\<?php echo $_SESSION['user_image'];?>" height="50px" width="50px" alt="mg" align="right">
			<br>
			<br>
			<?php
			}
			if(isset($_SESSION['user_name']))
			{?>
			Welcome <?php echo $_SESSION['user_name'];
			?>
			<br>
			<a class="logout" href="logout.php">Logout</a>
			<?php
			}
			?>
			</div>
		</header>
	<?php
		include("sidebar.php");
	?>	
	</body>
</html>	