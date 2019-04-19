<?php
	session_start();
	include 'connection.php';
		$adno=strtoupper($_POST['ad_no']);
		$pass=$_POST['passwd'];
		$sqlq = "select * from participants where ad_no='".$adno."'";
		$res = mysqli_query($con, $sqlq);
		if($res->num_rows!=0){
			while($row=mysqli_fetch_array($res))
			{
				if($pass == $row['password']){
					$_SESSION['id'] = $adno;
					header('location:home.php');
					}
				else{echo "<script>alert('Wrong Password'); window.location.href='index.html';</script>";}		
			}
		}
		else
		{
			echo "<script>alert('You are not a Registered user'); window.location.href='index.html';</script>";
		}
				
?>