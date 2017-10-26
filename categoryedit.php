<?php
include("db.php");
$id=$_GET['pid'];
$query="select * from categorydetails where id=".$id;
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
<title>category edit</title>
</head>
<body>
<?php
		include("header.php");
?>
	<main>
	<div id="content">
		<div class="inner">
			<center>
		<form action="categoryupdate.php" method="POST" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<th>Category Id</th>
				<td><input type="text" name="cid" id="cid" value=<?php echo $resl['cid']; ?>></td>
			</tr>
			<tr>
				<th>Category Name</th>
				<td><input type="text" name="cname" id="cname" value=<?php echo $resl['name']; ?>></td>
			</tr>
			<tr>
				<th>Category Parent</th>
					<td>
					<?php
					$user_parent=$resl['parent'];
					?>
					<select name= "parent">
						<option value="No Parent">No Parent</option>
						<?php 
						$i=0;
							while($row=mysql_fetch_array($resql)){
								$selected="";
								if($row['id']==$user_parent){
									$selected="selected";
								}
								echo '<option value="'.$row['id'].'" '.$selected.'>'.$row['name'].'</option>';
								$i++;
							}
							?>
						</select>
					</td>
				</tr>
			<tr>
				<th>Category Image</th>
				<td><input type="file" name="image"><img src="categoryimages/<?php echo $resl['image'];?>" height="50px" width="50px"></td>
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