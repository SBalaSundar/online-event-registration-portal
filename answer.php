<?php
	session_start();
	include'connection.php';
	$ans1[0]=0;
	$ans1[1]=0;
	$text = trim($_POST['ans1']);
	$textAr = explode("\n", $text);
	$textAr = array_filter($textAr, 'trim');
	$i=0;
	foreach ($textAr as $line) {
		$ans1[$i] = $line;
		$i++;
	} 
	$ans12[0]="";
	$ans12[1]="";
	$ans12[2]="";
	$text = trim($_POST['ans12']);
	$textAr = explode("\n", $text);
	$textAr = array_filter($textAr, 'trim');
	$i=0;
	foreach ($textAr as $line) {
		$ans12[$i] = $line;
		$i++;
	} 
	$ans15;
	$text = trim($_POST['ans15']);
	$textAr = explode("\n", $text);
	$textAr = array_filter($textAr, 'trim');
	$i=0;
	foreach ($textAr as $line) {
		$ans15[$i] = $line;
		$i++;
	}
	if($ans1[0] == 66 and $ans1[1]==3){
		echo "1Correct";
	}
	else {
		echo "InCorrect";
	}
	$teamid="";
	$sql ="select team_id1 from participants where ad_no = '".$_SESSION['id']."'";
	$res = mysqli_query($con, $sql);
	if($res->num_rows==0){
		$teamid = $_SESSION['id'];
	}
	else{
	while($row = mysqli_fetch_array($res)){
		$teamid = $row['team_id1'];
	}
	}
	$f = $teamid;
	$ext = ".txt";
	$data = $_POST['ans15'];
	$file = $f.$ext;
	if(file_exists($file)){
		echo "<script>alert('File already Present');";
	}
	else {
		$fo = fopen($file,"w");
		fwrite($fo,$data);
	}
	$sql = "insert into onlineprelims values('".$teamid."','".$ans1[0]."','".$ans1[1]."','".$_POST['ans2']."','".$_POST['ans3']."','".$_POST['ans4']."','".$_POST['ans5']."'
	,'".$_POST['ans6']."','".$_POST['ans7']."','".$_POST['ans8']."','".$_POST['ans9']."','".$_POST['ans10']."'
	,'".$_POST['ans11']."','".$ans12[0]."','".$ans12[1]."','".$ans12[2]."','".$_POST['ans13']."','".$_POST['ans14']."','".$_POST['ans15']."');";
	$res = mysqli_query($con, $sql);
	if($res){
		echo "<script>alert('Thankyou for taking the test'); window.location.href='home.php';</script>";
	}
	else{
		echo "<script>alert('OOPS! something went wrong, Sorry for Inconvenience');</script>";
	}
?>