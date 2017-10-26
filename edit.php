<?php
include("db.php");
$id=$_GET['pid'];
$query="select * from productdetails where id=".$id;
$res=mysql_query($query);
$resl=mysql_fetch_array($res);
$query1="select name,id from categorydetails";
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
<title>product edit</title>
</head>
<body>
<?php
		include("header.php");
?>
	<main>
	<div id="content">
		<div class="inner">
			<center>
		<form action="update.php" method="POST" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<th>Product Id</th>
				<td><input type="text" name="pid" id="pid" value=<?php echo $resl['pid']; ?>></td>
			</tr>
			<tr>
				<th>Product Name</th>
				<td><input type="text" name="pname" id="pname" value=<?php echo $resl['name']; ?>></td>
			</tr>
            <tr>
				<th>Size Available</th>
				<td><textarea rows="3" cols="10" name="size" id="size" value=<?php echo $resl['size']; ?>></textarea></td>
			</tr>
            <tr>
				<th>Type/Colour</th>
				<td><input type="text" name="type" id="type" value=<?php echo $resl['type']; ?>></td>
			</tr>
			</tr>
			<tr>
				<th>Product Description</th>
				<td><textarea rows="4" cols="50" name="pdes" id="pdes" ><?php echo $resl['description']; ?></textarea></td>
			</tr>
			<tr>
				<th>Product Image</th>
				<td><input type="file" name="image"><img src="images/<?php echo $resl['image'];?>" height="50px" width="50px"></td>
			</tr>
			<tr>
			<tr>
				<th>Category</th>
				<td>
				<?php
				$user_category=$resl['category'];
					?>
					<select name= "category">
						<?php 
						$i=0;
							while($row=mysql_fetch_array($resql)){
								$selected="";
								if($row['id']==$user_category){
									$selected="selected";
								}
								echo '<option value="'.$row['id'].'" '.$selected.'>'.$row['name'].'</option>';
								$i++;
							}
							?>
						</select>
					</td>
			</tr>		
				<th>MRP in Kg</th>
				<td><input type="text" name="mrpkg" id="mrpkg" value=<?php echo $resl['mrpkg']; ?>></td>
			</tr>
            </tr>		
				<th>MRP in Pieces</th>
				<td><input type="text" name="mrppcs" id="mrppcs" value=<?php echo $resl['mrppiece']; ?>></td>
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