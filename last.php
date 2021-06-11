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


	$sqlx="INSERT INTO myticket(name,phone,seat_no,price,last_id,busname,bustype) values('$jina','$namba','$seat','$p','$last_id','$nameee','$b_type')";
	
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