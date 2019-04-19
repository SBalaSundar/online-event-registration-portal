<?php
include 'connection.php';
session_start();
if(isset($_POST['member1'])){
$flag=0;
$mem1=$_SESSION['id'];
$mem2 = $_POST['team1'];
$pass1 = $_POST['tpass1'];
$sql = "select * from participants where ad_no='".$mem2."'";
$res = mysqli_query($con, $sql);
$min=rand(100,300);
$max=rand(500,700);
$team_id=rand($min,$max);
while($row=mysqli_fetch_array($res)){
	if($row['password']==$pass1){
		$sql11 = "select * from onlinecoding where member1='".$mem1."'";
		$res11 = mysqli_query($con, $sql11);
		if($res11->num_rows==0){
			$sql12 = "select * from onlinecoding where member1='".$mem2."'";
			$res12 = mysqli_query($con, $sql12);
			if($res12->num_rows==0){
				$sql13 = "select * from onlinecoding where member2='".$mem1."'";
				$res13 = mysqli_query($con, $sql13);
				if($res13->num_rows==0){
					$sql14 = "select * from onlinecoding where member2='".$mem2."'";
					$res14 = mysqli_query($con, $sql14);
				}
				else{$flag=1;}
			}
			else{$flag=1;}
		}
		else{$flag=1;}
		if($flag==0){
		$sql1 = "insert into onlinecoding values('".$team_id."','".$mem1."','".$mem2."')";
		$res1=mysqli_query($con, $sql1);
		if(!$res1){
			echo "<script>alert('Something went wrong');</script>";
			header('location:home.php');
		}
		$sql2 = "update participants set event_3='Online Coding', team_id1='".$team_id."' where ad_no='".$mem2."'";
		$res2=mysqli_query($con, $sql2);
		$sql3 = "update participants set team_id1='".$team_id."' where ad_no='".$mem1."'";
		$res3=mysqli_query($con, $sql3);
		if($res1==true and $res2==true and $res3==true){
			echo "<script>alert('Team Member added successfully'); window.location.href='home.php';</script>";
		}
		}
		else{echo "<script>alert('OOPS! Something went wrong');</script>";
		header('location:home.php');
		}
	}
	else{
		  echo "<script>alert('Your team mates password is wrong');  window.location.href='home.php';</script>";
	  }
}
}
elseif(isset($_POST['member2'])){
$flag=0;
$mem1=$_SESSION['id'];
$mem2 = $_POST['team2'];
$pass2 = $_POST['tpass2'];
$sql = "select * from participants where ad_no='".$mem2."'";
$res = mysqli_query($con, $sql);
$min=rand(100,300);
$max=rand(500,700);
$team_id=rand($min,$max);
while($row=mysqli_fetch_array($res)){
	if($row['password']==$pass2){
		$sql11 = "select * from dbmania where member1='".$mem1."'";
		$res11 = mysqli_query($con, $sql11);
		if($res11->num_rows==0){
			$sql12 = "select * from dbmania where member1='".$mem2."'";
			$res12 = mysqli_query($con, $sql12);
			if($res12->num_rows==0){
				$sql13 = "select * from dbmania where member2='".$mem1."'";
				$res13 = mysqli_query($con, $sql13);
				if($res13->num_rows==0){
					$sql14 = "select * from dbmania where member2='".$mem2."'";
					$res14 = mysqli_query($con, $sql14);
				}
				else{$flag=1;}
			}
			else{$flag=1;}
		}
		else{$flag=1;}
		if($flag==0){
		$sql1 = "insert into dbmania values('".$team_id."','".$mem1."','".$mem2."')";
		if(!$res1){
			echo "<script>alert('Something went wrong');</script>";
			header('location:home.php');
		}
		$res1=mysqli_query($con, $sql1);
		$sql2 = "update participants set event_4='DB Mania', team_id2='".$team_id."' where ad_no='".$mem2."'";
		$res2=mysqli_query($con, $sql2);
		$sql3 = "update participants set team_id2='".$team_id."' where ad_no='".$mem1."'";
		$res3=mysqli_query($con, $sql3);
		if($res1==true and $res2==true and $res3==true){
			echo "<script>alert('Team Member added successfully'); window.location.href='home.php';</script>";
		}
	  }
	  else{
		  echo "<script>alert('OOPS! He/She is already registered with someone');  window.location.href='home.php';</script>";
		  //header('location:home.php');
	  }
	}
	else{
		  echo "<script>alert('Your team mates password is wrong');  window.location.href='home.php';</script>";
	  }
}
}