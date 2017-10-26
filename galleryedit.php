<?php
include("db.php");
$id=$_GET['eid'];
$query="select * from gallerydetails where id=".$id;
$res=mysql_query($query);
$resl=mysql_fetch_array($res);
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
<title>Gallery edit</title>
</head>
<body>
<?php
		include("header.php");
?>
	<main>
	<div id="content">
		<div class="inner">
			<center>
		<form action="galleryupdate.php" method="POST" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<th>Gallery Name</th>
				<td><input type="text" name="gname" id="gname" value=<?php echo $resl['name']; ?> maxlength="50"></td>
			</tr>
			<tr>
				<th>Thumnail Image</th>
				<td><input type="file" name="image"><img src="thumbnail/<?php echo $resl['thumbnail'];?>" height="50px" width="50px">
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