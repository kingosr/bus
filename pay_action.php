
<?php
include 'connection.php';

$id=$_GET['id'];	
 echo $id;
 $paid="PAID";
$name=$_POST['confirm'];
echo "$name";

$sq="UPDATE myticket set confirm='$paid' where id='$id' ";
$q=mysqli_query($con, $sq);
if ($q) {
	header("location:payment.php");
}

?>