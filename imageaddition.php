<?php
include("db.php");
$id=$_GET['id'];
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
			.inner
			{
			margin:10px;
			margin-top:0px;
			}
	</style>
<body>
	<div id="content">
		<div class="inner">
			<center>
			<h2>Add Images</h2>	
			<form action ="imagesave.php" method='post' enctype="multipart/form-data"> 
			<table border="1" width="500px" height="100px" align="center">
				<tr>
					<td>name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>image</td>
					<td><input type="file" name="image"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="submit"></td>
				</tr>
				<input type="hidden" name="galleryid" value="<?php echo $id; ?>">
			</table>
			</form>	
			</center>
		</div>
	</div>
</body>
</html>			