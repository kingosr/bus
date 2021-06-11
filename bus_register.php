<?php 
include 'connection.php';

if (isset($_POST['submit'])) {
	$from=$_POST['from'];
	$to=$_POST['to'];
	$name=$_POST['name'];
	$plate=$_POST['plate'];
	$driver=$_POST['driver'];
	$type=$_POST['bus'];
	

	$sql="INSERT into routes (from_,to_,bus_name,plate,driver,bus_type) values ('$from','$to','$name','$plate', '$driver', '$type') ";
	$q=mysqli_query($con, $sql);
	if ($q) {
		header("location:index.php");
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>SAJILI BASI</title>
</head>
<body>
	<form method="post">
	<table border="1" cellspacing="0">
		<tr>
			<th colspan="2">SAJILI BASI</th>
		</tr>
		<tr>
			<td><label>FROM</label></td>
			<td><input type="text" name="from"></td>

		</tr>
		<tr>
			<td><label>TO</label></td>
			<td><input type="text" name="to"></td>

		</tr>
		<tr>
			<td><label>BUS NAME</label></td>
			<td><input type="text" name="name"></td>

		</tr>
			<tr>
			<td><label>PLATE NUMBER</label></td>
			<td><input type="text" name="plate"></td>

		</tr>
		</tr>
			<tr>
			<td><label>DRIVER NAME</label></td>
			<td><input type="text" name="driver"></td>

		</tr>
		<tr>
			<td><label>BUS CLASS</label></td>
			<td><input type="text" name="bus"></td>

		</tr>
			<td></td>
			<td><input type="submit" name="submit" value="SAJILI"></td>
		</tr>
		
	</table>
		</form>
</body>
</html>