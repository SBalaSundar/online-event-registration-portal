<?php
include 'connection.php';
$sql = "select max_seats,registered from events where event_id=11";
$res = mysqli_query($con , $sql);
$rem=0;
while($row=mysqli_fetch_array($res)){
	$rem = $row['max_seats']-$row['registered'];
}
echo $rem;
?>