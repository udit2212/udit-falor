<?php
include("db.php");
if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
?>
<html>
<head>
<title>Shobhit Marketing</title>
</head>
<style type="text/css">
body
{
	margin:0;
	padding:0;
	margin-top:0;
}
</style>
<body>
	<?php
		include("header.php");
	?>
		<main>
				<?php
				include("gallerycontent.php");
				?>
		</main>
	<?php
	include("footer.php");
	?>	
</body>
</html>