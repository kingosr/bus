<?php 
include 'connection.php';
$row="";
$kazi="";

if (isset($_POST['submit'])) {
	$search=$_POST['search'];



	$sql="SELECT * FROM myticket where ticketid like '%${search}%'";

	$query= mysqli_query($con ,$sql);

	$row=mysqli_fetch_array($query);

}
?>

 



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SEARCH YOUR TICKET</title>
	<style type="text/css">
		td{
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form method="post">
	<table class="table table-striped" >
		<tr>
			<td >ENTER YOUR TICKET ID</td><td><input type="number" name="search" required></td><td><input type="submit" name="submit"></td>
		</tr>
	</table><br><br>
</form>

<table border="1" cellspacing="0" width="1300px" class="table table-striped thead-dark">
	<th colspan="8" style="background-color:yellow;color: ;" class="">YOUR TICKET INFORMATION</th>
	<tr>
		<td>JINA</td>
		<td>PHONE</td>
		<td>KIASI CHA NAULI</td>
		<td>JINA LA BASI</td>
		<td>GARI NAMBA</td>
		<td>CLASS</td>

		<td>CONFIRM</td>

	</tr>
	<?php


?>
	
<?php
if ($row) {
$kazi=$row['confirm'] ;


echo "$kazi";
?>
<tr>
	<td width="200px" align="center"><?php echo $row['name'] ?></td>
	<td width="150px" align="center"><?php echo $row['phone'] ?></td>
	<td width="100px" align="center"><?php echo $row['price'] ?></td>
	<td width="200px" align="center"><?php echo $row['busname'] ?></td>
	<td width="150px" align="center"><?php echo $row['plate'] ?></td>
	<td width="150px" align="center"><?php echo $row['bustype'] ?></td>
		<form method="post" action="pay_action.php">
	

		<td><button><a href="pay_action.php?id=<?php echo $row['id'] ?>">THIBITISHA</a></button></td>
	</form>
	
</tr>

<?php



}
?> 


</body>
</html>
</table>


