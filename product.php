<?php
include("db.php");
$query="select name,id from categorydetails";
$resl=mysql_query($query);
?>
<html>
<head>
<title>product addition</title>
</head>
<body>
<center>
		<form action="add.php" method="POST" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<th>Product Id</th>
				<td><input type="text" name="pid" id="pid"></td>
			</tr>
			<tr>
				<th>Product Name</th>
				<td><input type="text" name="pname" id="pname"></td>
			</tr>
            <tr>
				<th>Size Available</th>
				<td><textarea rows="3" cols="10" name="size" id="size"></textarea></td>
			</tr>
            <tr>
				<th>Type/Colour</th>
				<td><input type="text" name="type" id="type"></td>
			</tr>
			</tr>
			<tr>
				<th>Product Description</th>
				<td><textarea rows="4" cols="50" name="pdes" id="pdes"></textarea></td>
			</tr>
			<tr>
				<th>Product Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Select Category</th>
				<td><select name="category">
				<option value="0">Select Category</option>
				<?php
				$i=0;
				while($row=mysql_fetch_array($resl))
				{
				echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				$i++;
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<th>Price in Kg</th>
				<td><input type="text" name="mrpkg" id="mrpkg"></td>
			</tr>
            <tr>
				<th>Price in Piece</th>
				<td><input type="text" name="mrppcs" id="mrppcs"></td>
			</tr>	
			<tr>	
			<td colspan="2" align="center"><input type="submit" name="Add" value="Add"></td>
			</tr>
		</table>
		</form>
</center>
</body>
</html>	