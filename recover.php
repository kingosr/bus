<?php
$id=$_GET['id'];
echo $id;
if (isset($_POST['recover'])) {
	# code...

$sqld="UPDATE seat set reserved=0 where id='$id' ";
$qd=mysqli_query($con, $sqld);
if ($qd) {
	echo "YES";
}else{
	echo "NO";
}
}
?>