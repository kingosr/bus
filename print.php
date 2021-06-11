<?php 
include 'connection.php';

$id=$_GET['id'];


// $sql="UPDATE seat set reserved=1 where id='$id' ";
// $q=mysqli_query($con, $sql);
// if ($q) {
// 	echo "YES";
// }else{
// 	echo "NO";
// }

$sql="SELECT * from myticket where last_id='$id'";
$q=mysqli_query($con, $sql);
$res=mysqli_fetch_assoc($q);
$seat=$res['phone'];

?>

<?php
$sql="UPDATE seat set reserved=1 where id='$id' ";
$q=mysqli_query($con, $sql);
if ($q) {
	// echo "YES";
}else{
	echo "NO";
}
?> 

<!DOCTYPE html>
<html>
<head>
	<title>MY TICKET</title>
</head>
<body bgcolor="yellow">
<center>
<table id="content" width="600px" height="250px"  style="border: 1px black solid;background-color: white;color: black;padding: 20PX;background-image: url(''); ">
	<tr>
		<td style="font-size: 30px" colspan="" align="center"><b><?php echo $res['busname'];?></b></td>
		<td align="center" style="font-size: 30px"><b><?php echo $res['bustype'];?></b></td>
	</tr>

	<tr>
		<th colspan="2" style="color: ">MY TICKET </th>
	</tr>
	<tr>
		<td>JINA LA ABIRIA</td>
		<td><?php echo $res['name'];?></td>
	</tr>
	<tr>
		<td>NAMBA YA SIMU</td>
		<td><?php echo $res['phone'];?></td>
	</tr>
	<tr>
		<td>GARI NUMBER</td>
		<td><?php echo $res['plate'];?></td>
	</tr>
	<tr>
		<td>SEAT NUMBER</td>
		<td><?php echo $res['seat_no'];?></td>
	</tr>
	<tr>
		<td>TICKET ID</td>
		<td><?php echo $res['ticketid'];?></td>
	</tr>
	<tr>
		<td>KIASI CHA NAULI</td>
		<td>TSH.<?php echo $res['price'];?>/=</td>
	</tr>
	<tr>
		<th colspan="2">AHSANTE KARIBU TENA!!</th>
	</tr>
</table></center>
<a href="index.php">GO TO ROUTES LIST</a>

<?php 

// $bytes=(rand(10000,100000));
// echo $bytes;

?>

</body>


</html>
