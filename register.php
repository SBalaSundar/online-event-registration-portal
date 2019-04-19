<?php
	//session_destroy();
	include 'connection.php';
		$name=$_POST['name'];
		$adno=strtoupper($_POST['adno']);
		$rno=strtoupper($_POST['rno']);
		$sec=strtoupper($_POST['section']);
		$email = $_POST['email'];
		$pass=$_POST['pass'];
		$cpass = $_POST['cpass'];
		$dept = "";
		if($pass==$cpass){
		$sqla = "select * from participants where ad_no='".$adno."'";
		$resa = mysqli_query($con, $sqla);
		$sqlr = "select * from participants where roll_no='".$rno."'";
		$resr = mysqli_query($con, $sqlr);
		if($resa->num_rows==0 and $resr->num_rows==0){
		if(strpos($rno,'BCS')!==false){
			$dept="CSE";
		}
		elseif(strpos($rno,'BIT')!==false){
			$dept="IT";
		}
		elseif(strpos($rno,'BEC')!==false){
			echo "<script>alert('This portal is only for CSE/IT'); window.location.href='index.html';</script>";
		}
		if(strpos($rno,'15')===0){
			$yr=4;
		}
		elseif(strpos($rno,'16')===0){
			$yr=3;
		}
		elseif(strpos($rno,'17')===0){
			$yr=2;
		}
		$event="";
		$sqlq = "insert into participants values('".$adno."','".$rno."','".$email."','NULL','NULL','".$dept."','".$yr."','".$section."','".$name."','".$pass."','NULL','NULL','NULL','NULL','AB','AB','AB','AB','NULL')";
		$res = mysqli_query($con, $sqlq);
		if($res){
			session_start();
			$_SESSION['id'] = $adno;
			header('location:home.php');
		}
		else {echo $sqlq;}
		}
		else{
			echo "<script>alert('OOPS! Its seems that you are already Registered'); window.location.href='index.html';</script>";
		}
		}
		else{
			echo "<script>alert('Password and confirm password Mismatch'); window.location.href='index.html';</script>";
		}
?>