<?php
	include("db.php");
	if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
	$query="select pro1.*, IFNULL(cat2.name,'')as categoryname from productdetails as pro1 LEFT JOIN categorydetails as cat2 on cat2.id=pro1.category";
	$resquery=(mysql_query($query));
?>
<html>
	<head>
	<title>abc</title>
	</head>
	<style type="text/css">
	a.abcd:link, a.abcd:visited
	{
	float:right;
	color:#0033CC;
	}
	a.defg:link, a.defg:visited
	{color:#0000CC;
	font-size:20px;
	}
	</style>
<body>
<center>
<h2>Product Details</h2>

<br>
	<table border="1" width="100%">
		<tr>
			<th>S.No.</th>
			<th>ProductId</th>
			<th>Product Name</th>
            <th>Product Sizes</th>
            <th>Type/Colour</th>
			<th>Product Description</th>
			<th>Product Image</th>
			<th>Product Category</th>
			<th>MRP in Kg</th>
            <th>MRP in Pieces</th>
			<th colspan="2" align="center">Action</th>
		</tr>

			<?php
			$con=1;
				while($row=mysql_fetch_array($resquery))
				{
			?>	
				<tr> 
					<td><?php echo $con; ?></td>
					<td><?php echo $row['pid']; ?></td>
					<td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td><?php echo $row['type']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td><img src="images\<?php echo $row['image'];?>" height="50px" width="50px" alt="mg"></td>
					<td><?php echo $row['categoryname']; ?></td>
					<td><?php echo $row['mrpkg']; ?></td>
                    <td><?php echo $row['mrppiece']; ?></td>
					<td><a class="defg" href="edit.php?pid=<?php echo $row['id']; ?>">Edit Product</a></td>
					<td><a class="defg" href="delete.php?sid=<?php echo $row['id']; ?>">Delete Product</a></td>	
			</tr>
			<?php
				$con++;
				}
			?>
		<tr>	
			<td colspan="9" align="center"><a class="defg" href="link5.php">Add product</a></td>
		</tr>
		</table>
		<br>
</center>
</body>
<html>	