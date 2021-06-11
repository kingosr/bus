<?php 
include 'connection.php';?>


<?php

$sql="SELECT * FROM routes ";
$q=mysqli_query($con, $sql);
$rowcount=mysqli_num_rows($q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>IT SERVICES TERMINALS</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>
<a href="bus_register.php" style="color: black">SAJILI BASI</a> | <a href="payment.php" style="color: black">THIBITISHA SAFARI</a>
<div class="container">
<table border="1" class="table table-striped">
<tr>
	<th colspan="7" style="text-align: center;font-family: sans-serif;font-weight: bold;">ROUTE AVAILABLE</td>
	
</tr>
<tr>
		<td width="200px" align="center">ID</td>
		<td width="200px" align="center">FROM</td>
		<td width="200px" align="center">TO</td>
		<td width="200px" align="center">BUS NAME</td>
		<td width="200px" align="center">PLATE NO</td>
		<td width="200px" align="center">BUS TYPE</td>

		<td width="200px" align="center">ACTION</td>
		

	</tr>
<?php

for ($i=1; $i <=$rowcount ; $i++) { 
	$row=mysqli_fetch_array($q);


 ?>
 
 	<tr>
 		<td  align="center"><?php echo $row['id']?></td>
 		<td  align="center"><?php echo $row['from_']?></td>
 		<td  align="center"><?php echo $row['to_']?></td>
 		<td  align="center"><?php echo $row['bus_name']?></td>
 		<td  align="center"><?php echo $row['plate']?></td>
 		<td  align="center"><?php echo $row['bus_type']?></td>
 		
 		<td  align="center"><button class="btn btn-primary font-light"><a href="book.php?id=<?php echo $row['id']; ?>">BOOK NOW</a></button></td>
 	</tr>





 <?php

}

 ?>
 </div>
</body>
</html>




