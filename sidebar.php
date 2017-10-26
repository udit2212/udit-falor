<?php
include("db.php");
?>
<html>
	<head>
		<title>SHOBHIT MARKETING</title>
	</head>
	<style type="text/css">
	.nav
	{
		margin-bottom: 0px;
		float: left;
		width: 20%;
		margin-left: 0;
		background: #00FF00;
		height:500px;
	}
	
	.inside
	{
		margin:15px;
		margin-top:0;
	}
	a.abc:link, a.abc:visited {
		color: #FF0000;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size:25px;
		font-family:"Times New Roman", Times, serif;
	}
	</style>

	<body>
		<nav class="nav">
			<div class="inside">
				<a class="abc" href="index.php">Dashboard</a>
				<br />
				<br />
				<a class="abc" href="link4.php">Products</a>
				<br />
				<br />
				<a class="abc" href="categorylink.php">Categories</a>
				<br />
				<br />
                <a class="abc" href="ordersindex.php">Orders</a>
                <br>
                <br>
				<a class="abc" href="galleryindex.php">Gallery</a>
				<br />
				<br />
				<a class="abc" href="index.php">About Us</a>
				<br />
				<br />
				<a class="abc" href="index.php">Contact Us</a>
			</div>
		</nav>
	</body>
</html>
