
<?php
$server="localhost";
$username="root";
$pass="";
$db="bus_tz";
$msg="";
$con=mysqli_connect($server, $username, $pass ,$db);

if (!$con) {
	$msg="MTANDAO UNASUMBUA JARIBU TENA BAADAE!!";
}

?>

