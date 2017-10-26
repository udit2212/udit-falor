<?php
	include("db.php");
	if(! $_SESSION['user_name'])
	{
		header('location:link3.php');
	}
	$query="select * from cart where status='delivered'";
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
<body>

<div class="container" style="width:1064.19">
  <h2>Completed Orders</h2>                                                                                               
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
        </tr>
          <?php
          $con++;
        }
        ?>
        </tbody>
      </table>
  </div>
</body>
</html>  