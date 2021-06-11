<?php 
include 'connection.php';



$id=$_GET['id'];
echo $id;




$sql="SELECT * FROM seat where route_id='$id' ";
$q=mysqli_query($con, $sql);
$rowcount=mysqli_num_rows($q);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>BOOK NOW</title>
	<style type="text/css"

	>
		
		a{
			text-decoration: none;
			color: white;
		}
		.d{
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>

<a class="d" href="register_seat.php?id=<?php echo $id;?>">SAJILI SEAT BASE ON ROUTES</a>
<table border="1" class="table table-striped">
<tr>
	<th colspan="6" style="text-align:center;">SEAT AVAILABLE</td>
	
</tr>
<tr>
		<td width="200px" align="center">ID</td>
		<td width="200px" align="center">SEAT NO</td>
		<td width="200px" align="center">PRICE</td>
		<!-- <td width="200px" align="center">AVAILABILITY</td>
		<td width="200px" align="center">RESERVED</td> -->
		<td width="200px" align="center">ACTION</td>
		

	</tr>
<?php

for ($i=1; $i <=$rowcount ; $i++) { 
	$row=mysqli_fetch_array($q);


 ?>
 
 	<tr>
 		<td  align="center"><?php echo $row['id']?></td>
 		<td  align="center"><?php echo $row['seat_no']?></td>
 		<td  align="center"><?php echo $row['price']?></td>
 	<!-- 	<td  align="center"><?php echo $row['available']?></td>
 		<td  align="center"><?php echo $row['reserved']?></td> -->
 		<td  align="center">
 			<?php
 				$idt=$row['available'];
 				$rez=$row['reserved'];
 				if (!($idt = $rez)) {
 				
 				
 			?>
 			<button style="background-color: " class="btn btn-primary">

 				<a   href="booking.php?id=<?php echo $row['id'];?>&ids=<?php echo $id; ?>">BOOK NOW</a>

 			</button>

 			<?php
 		}else{


 			?>
 			<button style="background-color:;color: white" class="btn btn-danger">BOOKED</button>
 			<?php
 		}
 		?>

 		</td>
 	</tr>





 <?php

}

 ?>
<!-- 
 <?php 


$id=$_GET['id'];
echo $id;

$sqlq="SELECT * FROM seat where route_id='$id' && reserved=1";
$qq=mysqli_query($con, $sql);
$rowcountq=mysqli_num_rows($q);
?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOK NOW</title>
	<style type="text/css"

	>
		
		a{
			text-decoration: none;
			color: white;
		}
	</style>
</head>
<body>

<a href="register_seat.php?id=<?php echo $id;?>">SAJILI SEAT BASE ON ROUTES</a>
<table border="1">
<tr>
	<th colspan="6">SEAT AVAILABLE</td>
	
</tr>
<tr>
		<td width="200px" align="center">ID</td>
		<td width="200px" align="center">SEAT NO</td>
		<td width="200px" align="center">PRICE</td>
		<td width="200px" align="center">AVAILABILITY</td>
		<td width="200px" align="center">RESERVED</td>
		<td width="200px" align="center">ACTION</td>
		

	</tr>
<?php

for ($ie=1; $ie <=$rowcountq ; $ie++) { 
	$rows=mysqli_fetch_array($qq);


 ?>
 
 	<tr>
 		<td  align="center"><?php echo $rows['id']?></td>
 		<td  align="center"><?php echo $rows['seat_no']?></td>
 		<td  align="center"><?php echo $rows['price']?></td>
 		<td  align="center"><?php echo $rows['available']?></td>
 		<td  align="center"><?php echo $rows['reserved']?></td>
 		<td  align="center">
 			<?php
 				$idtt=$rows['available'];
 				$rezt=$rows['reserved'];
 				if ($idtt = $rezt) {
 				
 				
 			?>
 			<button style="background-color: green">

 				<a   href="booking.php?id=<?php echo $row['id']; ?>">BOOK NOW</a>

 			</button>

 			<?php
 		}else{


 			?>
 			<button style="background-color: red;color: white">BOOKED</button>
 			<?php
 		}
 		?>

 		</td>
 	</tr>





 <?php

}

 ?>

 <?php ?> -->




</body>
</html>