<?php
include 'connection.php';
session_start();
$id = $_SESSION['id'];
if(isset($_POST['event1'])){
$event1 = "Poster Designing";
echo $event1;
$sql = "update participants SET event_1='".$event1."' where ad_no = '".$id."'";
mysqli_query($con , $sql);
echo "<script>alert('Registration Success'); window.location.href='home.php';</script>";
}
elseif(isset($_POST['event2'])){
$event2 = "Web Designing";
$sql = "update participants SET event_2='".$event2."' where ad_no = '".$id."'";
mysqli_query($con , $sql);
echo "<script>alert('Registration Success'); window.location.href='home.php';</script>";
}
elseif(isset($_POST['event3'])){
$event3 = "Online Coding";
$sql = "update participants SET event_3='".$event3."' where ad_no = '".$id."'";
mysqli_query($con , $sql);
echo "<script>alert('Registration Success'); window.location.href='home.php';</script>";
}
elseif(isset($_POST['event4'])){
$event4 = "DB Mania";
$sql = "update participants SET event_4='".$event4."' where ad_no = '".$id."'";
mysqli_query($con , $sql);
echo "<script>alert('Registration Success'); window.location.href='home.php';</script>";
}
?>