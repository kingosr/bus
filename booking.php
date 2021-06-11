<?php 
include 'connection.php';

$id=$_GET['id'];
$ids=$_GET['ids'];
$msg="";
echo $ids;

$sqlq="SELECT * from routes where id='$ids'";
$qq=mysqli_query($con, $sqlq);
$resq=mysqli_fetch_array($qq);
$nameee=$resq['bus_name'];
$b_type=$resq['bus_type'];
$plate=$resq['plate'];
echo $plate;
echo $nameee;
echo $b_type;
// echo $id;

// $sql="UPDATE seat set reserved=1 where id='$id' ";
// $q=mysqli_query($con, $sql);
// if ($q) {
// 	echo "YES";
// }else{
// 	echo "NO";
// }

$sql="SELECT * from seat where id='$id'";
$q=mysqli_query($con, $sql);
$res=mysqli_fetch_array($q);
$seat=$res['seat_no'];

?>
<?php
if (isset($_POST['submit'])) {
	$jina=$_POST['jina'];
	$namba=$_POST['simu'];
	$seat=$res['seat_no'];
	$p=$res['price'];
	$last_id=$res['id'];
	$plate=$resq['plate'];
	$bytes=(rand(10000,100000));


	$sqlx="INSERT INTO myticket(name,phone,seat_no,price,last_id,busname,bustype,plate,ticketid) values('$jina','$namba','$seat','$p','$last_id','$nameee','$b_type','$plate','$bytes')";
	
	$queryi=mysqli_query($con, $sqlx);

	if ($queryi) {
		$msg="YOUR TICKET PROCESSED";
	}else{
		echo "NO";
	}
// $sql="UPDATE seat set reserved=1 where id='$id' ";
// $q=mysqli_query($con, $sql);
// if ($q) {
// 	// echo "YES";
// }else{
// 	echo "NO";
// }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>FOMU YA USAJILI WA TICKET</title>
</head>
<body>
<form method="post">
<table bgcolor="yellow" style="border: 1px black dotted">
	
	<tr>
		<th colspan="2">JAZA FOMU HII KUPATA TICKET YAKO</th>
	</tr>
	<tr>
		<td>NAMBA YA SEAT</td>
		<td align="center"><?php echo $res['seat_no']; ?></td>
	</tr>
	<tr>
		<td>KIASI CHA NAULI</td>
		<td align="center"><?php echo $res['price']; ?></td>
	</tr>
	<tr>
		<td>JINA LA MTEJA</td>
		<td><input type="text" name="jina"></td>
	</tr>
		<tr>
		<td>NAMBA YA SIMU</td>
		<td><input type="text" name="simu"></td>
	</tr>
		<tr>
		<td></td>
		<td><input type="submit" name="submit" value="TICKET"></td>
	</tr>
</table>
</form><br>
<a href="print.php?id=<?php echo $last_id; ?>">PRINT YOUR TICKET</a><br><br><?php echo $msg; ?>
<a href="contactUs.php<?php echo $last_id; ?>">CONTACT US</a><br><br><?php echo $msg; ?>
</body>
</html>

