<?php 
include 'connection.php';

$id=$_GET['id'];
echo $id;

// $sqlz="SELECT * FROM seat where route_id='$id' ";
// $qz=mysqli_query($con, $sqlz);
// $resu=mysqli_fetch_array($qz);
// $ids=$resu['id'];




?>
<?php 


if (isset($_POST['submit'])) {
	$from=$_POST['no'];
	$to=$_POST['price'];
	$name=0;
	$type=0;
	

	$sql="INSERT into seat (seat_no,route_id,price,available,reserved) values ('$from','$id','$to','$name','$type')  ";
	$q=mysqli_query($con, $sql);
	if ($q) {
		echo "DATA INSERTED SUCCESS!!";
	}else{
		echo "NO";
	}
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>SAJILI ROUTE ZA BUS BASE ON ROUTE</title>
</head>
<body>
	<form method="post">
	<table border="1" cellspacing="0">
		<tr>
			<th colspan="2">SAJILI SEAT</th>
		</tr>
		<tr>
			<td><label>SEAT NO</label></td>
			<td><input type="text" name="no"></td>

		</tr>
		<tr>
			<td><label>PRICE</label></td>
			<td><input type="text" name="price"></td>

		</tr>

		</tr>
			<td></td>
			<td><input type="submit" name="submit" value="SAJILI"></td>
		</tr>
		
	</table>
		</form>
		<a href="book.php?id=<?php echo $id; ?>">SEAT LIST</a>
</body>
</html>