<?php
	include("db.php");
	if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
	$query="select cat1.*, IFNULL(cat2.name,'')as parentname from categorydetails as cat1 LEFT JOIN categorydetails as cat2 on cat2.id=cat1.parent";
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
						<h2>Category Details</h2>

<br>
	<table border="1" width="100%">
		<tr>
			<th>S.No.</th>
			<th>CategoryId</th>
			<th>Category Name</th>
			<th>Category Parent</th>
			<th>Category Image</th>
			<th colspan="2" align="center">Action</th>
		</tr>

			<?php
			$con=1;
				while($row=mysql_fetch_array($resquery))
				{
			?>	
				<tr> 
					<td><?php echo $con; ?></td>
					<td><?php echo $row['cid']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['parentname']; ?></td>
					<td><img src="categoryimages\<?php echo $row['image'];?>" height="50px" width="50px" alt="mg"></td>
					<td><a class="defg" href="categoryedit.php?pid=<?php echo $row['id']; ?>">Edit Category</a></td>
					<td><a class="defg" href="categorydelete.php?sid=<?php echo $row['id']; ?>">Delete Category</a></td>	
			</tr>
			<?php
				$con++;
				}
			?>
		<tr>	
			<td colspan="7" align="center"><a class="defg" href="addcategorylink.php">Add Category</a></td>
		</tr>
		</table>
		<br>
</center>
					</div>
				</div>
	</body>
</html>