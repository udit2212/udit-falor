<?php
include("db.php");
$id=$_GET['sid'];
$query="select * from galleryimages where id=".$id;
$res=mysql_query($query) or die(mysql_error());
$resl=mysql_fetch_array($res);

$query1="select name,id from gallerydetails";
$resql=mysql_query($query1);
?>
<html>
<head>
<style type="text/css">
body
{
	margin:0;
	padding:0;
	margin-top:0;
}
			#content
			{
			width:80%;
			float:left;
			}
			.inner
			{
			margin:30px;
			margin-top:0px;
			}
</style>
<title>Image edit</title>
</head>
<body>
<?php
		include("header.php");
?>
	<main>
	<div id="content">
		<div class="inner">
			<center>
		<form action="imageupdate.php" method="POST" enctype="multipart/form-data">
		<table border="1" width="500px" height="100px" align="center">
			<tr>
				<th>Image Name</th>
				<td><input type="text" name="name" id="name" value=<?php echo $resl['name']; ?>></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"><img src="galleryimages/<?php echo $resl['image'];?>" height="50px" width="50px"></td>
			</tr>	
			<tr>	
			<td colspan="2" align="center"><input type="submit" name="Update" value="Update"></td>
			</tr>
		</table>
		<input type="hidden" value="<?php echo $resl['id'];?>" name="hide">
		</form>
</center>
</div>
</div>
<?php
	include("footer.php");
?>
</body>
</html>	