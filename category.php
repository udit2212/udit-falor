<?php
include("db.php");
$query="select name,id from categorydetails";
$resql=mysql_query($query);
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
			margin:30px;
			margin-top:0px;
			}
	</style>
<body>
	<div id="content">
		<div class="inner">
			<center>
				<form action="categoryadd.php" method="POST" enctype="multipart/form-data">
				<table border="1">
					<tr>
						<th>Category Id</th>
						<td><input type="text" name="cid" id="cid"></td>
					</tr>
					<tr>
						<th>Category Name</th>
						<td><input type="text" name="cname" id="cname"></td>
					</tr>
					</tr>
					<tr>
						<th>Category Parent</th>
						<td><select name= "parent">
						<option value="No Parent">No parent</option>
							<?php 		
							$i=0;
							while($row=mysql_fetch_array($resql)){
								echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
								$i++;
							} 
							?>
							</select>
						</td>
					</tr>
					<tr>
						<th>Category Image</th>
						<td><input type="file" name="image"></td>
					</tr>
					<tr>	
					<td colspan="2" align="center"><input type="submit" name="Add" value="Add"></td>
					</tr>
				</table>
				</form>
			</center>
		</div>
	</div>
</body>
</html>
