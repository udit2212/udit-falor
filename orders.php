<?php
	include("db.php");
	if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
	$query="select * from cart where status='orderplaced' OR status='dispatched'";
	$resq=(mysql_query($query));
?>
<html>
<head>
  <title>Shobhit Marketing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	.container
	{
		margin:0;
	}
</style>
<body>
	<div id="content">
		<div class="inner">
		<button type="button" onClick="loadDoc()">Complete Orders</button>        
        <p id="content1"></p>
        <br>

<div class="container" style="width:1064.19">
  <h2>Pending Orders</h2>                                                                                               
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>S.No.</th>
            <th>User name</th>
            <th>Product Name</th>
            <th>Type</th>
            <th>Weight</th>
            <th>Price</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>Email</th>
            <th>Current Status</th>
            <th>Change Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $con=1;
        while($row=mysql_fetch_array($resq))
        {
        ?>
        <tr>
            <td><?php echo $con; ?></td>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['weight']; ?></td>
            <td><?php echo $row['mrp']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
            <form action="updateorder.php" method="GET">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <select name="status">
            <option value="orderplaced">OrderPlaced</option>
            <option value="dispatched">Dispatched</option>
            <option value="delivered">Delivered</option>
            </select>
            </td>
            <td><button type="submit" style="padding:0; border:0;">Save Changes</button></td>
            </form>
        </tr>
          <?php
          $con++;
        }
        ?>
        </tbody>
      </table>     
  </div>
        
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("content1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "completeorders.php", true);
  xhttp.send();
}


</script>

		</div>
	</div>
	</body>
</html>