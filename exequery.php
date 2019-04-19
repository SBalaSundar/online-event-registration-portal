<?php 
<?php
session_start();
if(!$_SESSION['aid']){
	echo "<script>alert('Un Authorized Access'); window.location.href='index.php';</script>";
}
else{
include 'connection.php';
?> 
?>
<form method="POST">
<input type="text" name="query"/>
<button type="submit" name="execute">Execute Query</button>
</form>
<?php if(isset($_POST['execute'])){
	$sql = $_POST['query'];
	$res = mysqli_query($con,$sql);
	if(!$res){echo "<script>alert('Query execution failed');</script>",$sql;}
	else{echo "<script>alert('Query Executed Successfully');</script>";}
}
}?>