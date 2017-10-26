<?php
include("db.php");
if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
$query="select * from gallerydetails";
$resquery=(mysql_query($query));	
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
			<h2>Product Details</h2>
				<table border="1" width="50%" align="center">
					<tr>
						<th>S.No.</th>
						<th>Gallery Name</th>
						<th colspan="3">Action</th>
					</tr>
					<?php
					$con=1;
						while($row=mysql_fetch_array($resquery))
						{
					?>
					<tr>
						<td><?php echo $con; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><a href="galleryviewindex.php?vid=<?php echo $row['id'];?>">View Gallery</a></td>
						<td><a href="galleryedit.php?eid=<?php echo $row['id'];?>">Edit Gallery</a></td>
						<td><a href="gallerydelete.php?sid=<?php echo $row['id'];?>">Delete Gallery</a></td>
					</tr>
					<?php
					$con++;
					}
					?>	
					<tr>
						<td colspan="5" align="center"><a href="galleryadd.php">Add Gallery</a></td>
					</tr>
				</table>
			</center>	
			</div>
		</div>
	</body>
</html>