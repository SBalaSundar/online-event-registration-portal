<?php
	//include 'connection.php';
	session_start();
	if(isset($_SESSION['id'])){
include 'connection.php';
$sql = "select * from participants where ad_no = '".$_SESSION['id']."'";
$res = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
	$event_1 = $row['event_1'];
	$event_2 = $row['event_2'];
	$event_3 = $row['event_3'];
	$event_4 = $row['event_4'];
	$teamid1 = $row['team_id1'];
	$teamid2 = $row['team_id2'];
}
$ad_no=$_SESSION['id'];
$sqlt1 = "select * from onlinecoding where member1='".$ad_no."'";
$rest1 = mysqli_query($con, $sqlt1);
if($rest1->num_rows==0){	
	$sqlt2 = "select * from onlinecoding where member2='".$ad_no."'";
	$rest2 = mysqli_query($con, $sqlt2);
	if($rest2->num_rows==0){$member1="Empty";}
	else{
		while($row=mysqli_fetch_array($rest2)){
			$member1=$row['member1'];
		}
		$sqlm1="select * from participants where ad_no='".$member1."'";
		$resm1=mysqli_query($con, $sqlm1);
		while($row=mysqli_fetch_array($resm1)){
			$member1=$row['name'];
		}
	}
}
else{
	while($row=mysqli_fetch_array($rest1)){
			$member1=$row['member2'];
		}
	$sqlm1="select * from participants where ad_no='".$member1."'";
	$resm1=mysqli_query($con, $sqlm1);
	while($row=mysqli_fetch_array($resm1)){
		$member1=$row['name'];
	}
}
$sqlt3 = "select * from dbmania where member1='".$ad_no."'";
$rest3 = mysqli_query($con, $sqlt3);
if($rest3->num_rows==0){
	$sqlt4 = "select * from dbmania where member2='".$ad_no."'";
	$rest4 = mysqli_query($con, $sqlt4);
	if($rest4->num_rows==0){
	$member2="Empty";
}
elseif($rest4->num_rows !=0){
	while($row=mysqli_fetch_array($rest4)){
			$member2=$row['member1'];
		}
	$sqlm1="select * from participants where ad_no='".$member2."'";
	$resm1=mysqli_query($con, $sqlm1);
	while($row=mysqli_fetch_array($resm1)){
		$member2=$row['name'];
		//echo "2 ",$member2;
	}
}
}
elseif($rest3->num_rows !=0){
	while($row=mysqli_fetch_array($rest3)){
			$member2=$row['member2'];
		}
	$sqlm1="select * from participants where ad_no='".$member2."'";
	$resm1=mysqli_query($con, $sqlm1);
	while($row=mysqli_fetch_array($resm1)){
		$member2=$row['name'];
		//echo "2 ",$member2;
	}
}
if($event_1=='NULL'){
	$name1 = "empty";
	}
else{
	$name1 = "Registered";
	}
if($event_2=='NULL'){
	$name2 = "empty";
}
else{
	$name2 = $event_2;
}
if($event_3=='NULL'){
	$name3 = "empty";
	}
else{
	$name3 = "Registered";
}
if($event_4=='NULL'){
	$name4 = "empty";
	}
else{
	$name4 = "Registered";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 238px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: black;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 42px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: white;
  padding: 0px;
  font-size: 0px;
}
@import url(https://fonts.googleapis.com/css?family=Patua+One|Open+Sans);
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
table {
  border-collapse: separate;
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  margin: 5px auto;
  -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

thead {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
}

thead th {
  font-family: 'Patua One', cursive;
  font-size: 16px;
  font-weight: 400;
  color: #fff;
  text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
  text-align: left;
  padding: 20px;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzY0NmY3ZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzRhNTU2NCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
  background-image: -moz-linear-gradient(#646f7f, #4a5564);
  background-image: -webkit-linear-gradient(#646f7f, #4a5564);
  background-image: linear-gradient(#646f7f, #4a5564);
  border-top: 1px solid #858d99;
}
thead th:first-child {
  -moz-border-radius-topleft: 5px;
  -webkit-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
}
thead th:last-child {
  -moz-border-radius-topright: 5px;
  -webkit-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}

tbody tr td {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  color: black;
  font-size: 15px;
  padding: 10px 10px 10px 10px;
  border-bottom: 1px solid #e0e0e0;
}

tbody tr:nth-child(2n) {
  background: #f0f3f5;
}

tbody tr:last-child td {
  border-bottom: none;
}
tbody tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 5px;
  -webkit-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
}
tbody tr:last-child td:last-child {
  -moz-border-radius-bottomright: 5px;
  -webkit-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
tbody:hover > tr:hover td {
  text-shadow: none;
  color: #2d2d2d;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 700px;
  padding: 10px;
  background-color: white;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<div class="sidebar" align="center">
  <a href="home.php"><img src="gyanmitra-anim.gif" height="40" width="100%"/></a>
  <a href="#" onclick="return showEvents(1);">Poster Designing</a>
  <a href="#" onclick="return showEvents(2);">Web Designing</a>
  <a href="#" onclick="return showEvents(3);">Online Coding</a>
  <a href="#" onclick="return showEvents(4);">DB Mania</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
<div class="sticky" align="center"><p><img src="gyanbanner.png" height="130" width="85%"/></p>
</div>
<p align="center"><img src="gyanmitra19.png" height="90" width="50%"/><br>
<img src="closingdate.gif" height="27"/></p>
<div class="form-popup" id="myForm1">
  <form method="POST" action="addevent.php" class="form-container">
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>Poster Designing</h4></legend>
				<form method="POST" action="addevent.php">
					<h4>Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A self-explanatory poster has to be designed. The theme of the poster will be provided on the spot. </p>
					<h4>Rules</h4>
					<p>1.	Individual Event.</p>
					<p>2.	Participants should bring laptops.</p>
					<p>3.	Plagiarism will not be tolerated.</p>
					<p>4.	Softwares Required – Adobe Photoshop, CorelDRAW.</p>
					<p>5.	Theme will be given on spot.</p>
					<p>6.	Dimension : 400X600 mm.</p>
					<p>7.	Decision of the jury is final.</p>
					<p align="center"><button type="submit" name="event1" class="btn">Confirm Registration</button></p>
					<button type="button" class="btn cancel" onclick="closeForm(1)">Close</button>
				</form>
			</p></fieldset></td>
        </tr>
		</table>
    </form>
</div>
<div class="form-popup" id="myForm2">
  <form method="POST" action="addevent.php" class="form-container">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>Web Designing</h4></legend>
				<form method="POST" action="addevent.php">
                    <h4>Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The theme of the Website will be provided on the spot. </p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	Individual Event with two rounds</p>
					<p style="margin:0.1;">2.	Round 1 : It consists of some basic questions on web development</p>
					<p style="margin:0.1;">3.	Round 2 : Be ready to code by connecting it with some back end. You can use PHP, HTML, CSS, Wamp Server(For back end)</p>
					<p style="margin:0.1;">4.	Decision of the jury is final.</p>
					<p style="margin:0.1;">5.	The moderators can disqualify the team if any malpractice is found.</p>
					<p style="margin:0.1;">6.	No web Templates.</p>
					<p align="center"><button type="submit" name="event2" class="btn">Confirm Registration</button></p>
				<button type="button" class="btn cancel" onclick="closeForm(2)">Close</button>
				</form>
			</p></fieldset></td>
        </tr>
		</table>
    </form>
</div>
<div class="form-popup" id="myForm3">
  <form method="POST" action="addevent.php" class="form-container">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>Online Coding</h4></legend>
				<form method="POST" action="addevent.php">
                    <h4>Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The programs for the questions that are posted on the website has to be written . </p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	A team can have a maximum of 2 participants.</p>
					<p style="margin:0.1;">2.	The actual competition would be hosted on an online platform and the link would be intimated.</p>
					<p style="margin:0.1;">3.	The length of the competition would be 2 days.</p>
					<p style="margin:0.1;">5.	Participants who are selected from the first day event would only be allowed for the second day event.</p>
					<p style="margin:0.1;">6.	The language for implementation is not restricted</p>
					<p align="center"><button type="submit" name="event3" class="btn">Confirm Registration</button></p>
				<button type="button" class="btn cancel" onclick="closeForm(3)">Close</button>
				</form>
			</p></fieldset></td>
        </tr>
		</table>
    </form>
</div>
<div class="form-popup" id="myForm4">
  <form method="POST" action="addevent.php" class="form-container">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>DB Mania</h4></legend>
				<form method="POST" action="addevent.php">
                    <h4>Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBMania is a query contest to bring your querying 
					skill .It consists of set of questions where you have to bring out the answers/output using queries. 
					Participants are requested to solve the problems within less time and win prizes. The number of questions
					solved and the time taken will be considered to select the winning team.</p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	A team can have a maximum of 2 participants.</p>
					<p style="margin:0.1;">3.	The moderators can disqualify the team if any malpractice is found.</p>
					<p style="margin:0.1;">5.	Knowledge needed in Oracle/MySQL queries</p>
					<p style="margin:0.1;">6.	The event consists of three rounds.</p>
					<p style="margin:0.1;">7.	Round 1:Questionnaire prelims will be conducted to shortlist the team</p>
					<p style="margin:0.1;">8.	Round 2:Execute and produce output for the given questions using queries and 
					teams for next round will be chosen based on their time of completion and number of queries</p>
					<p style="margin:0.1;">9.	Round 3:Range of difficulty will be high and the winners would be chosen based on
					the number of queries completed within that specific time allotted</p>
					<button type="submit" class="btn" name="event4">Confirm Registration</button>
				<button type="button" class="btn cancel" onclick="closeForm(4)">Close</button>
				</form>
			</p></fieldset></td>
        </tr>
		</table>
</form>
</div>
<datalist id="participants1">
				<?php
				$sqlq = "select * from participants where event_3='NULL'";
				$part = mysqli_query($con, $sqlq);
				while ($row = mysqli_fetch_array($part)) { ?>
				<option value="<?php echo $row['ad_no'] ?>">
				<?php } ?>
</datalist>
<datalist id="participants2">
				<?php
				$sqlq = "select * from participants where event_4='NULL'";
				$part = mysqli_query($con, $sqlq);
				while ($row = mysqli_fetch_array($part)) { ?>
				<option value="<?php echo $row['ad_no'] ?>">
				<?php } ?>
</datalist>
<div class="form-popup" id="myForm5">
  <form method="POST" action="team.php" class="form-container">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>Add Team mate for Online Coding</h4></legend>
                    <p><b>Team mate's</b>&nbsp;&nbsp;&nbsp;<input type="text" id="team1" Placeholder="Admission Number" list="participants1" name="team1"/>
					</p><p><b>Team mate's</b>&nbsp;&nbsp;&nbsp;<input type="password" placeholder="password" name="tpass1"/></p>
					<button type="submit" class="btn" name="member1">Confirm Team mate</button>
				<button type="button" class="btn cancel" onclick="closeForm(5)">Close</button>
			</p></fieldset></td>
        </tr>
		</table>
</form>
</div>
<div class="form-popup" id="myForm6">
  <form method="POST" action="team.php" class="form-container">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>Add Team mate for DB Mania</h4></legend>
                    <p><b>Team mate's</b>&nbsp;&nbsp;&nbsp;<input type="text" id="team2" Placeholder="Admission Number" list="participants2" name="team2"/>
					</p><p><b>Team mate's</b>&nbsp;&nbsp;&nbsp;<input type="password" placeholder="password" name="tpass2"/>
					</p><button type="submit" class="btn" name="member2">Confirm Team mate</button>
				<button type="button" class="btn cancel" onclick="closeForm(6)">Close</button>
			</p></fieldset></td>
        </tr>
		</table>
</form>
</div>
  <div id="txtHint">
 <table border="1" align="center">
	<thead>
	<tr>
		<th>S.No</th>
		<th>Time</th>
		<th>Event Name</th>
		<th>Registeration Status</th>
		<th>Teammate</th>
		<th>Team Id</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<td>1.</td>
		<td>08:30AM-10:00AM</td>
		<td>Poster Designing</td>
		<?php if ($name1=="empty"){?>
		<td><a href="#" onclick="openForm(1)">Click here to Register</a>
		</td><?php }
		else { ?>
		<td><?php echo $name1; }?></td>
		<td>Individual Event</td>
		<td>-</td>
		</tr>
	<tr>
		<td>2.</td>
		<td>10:10AM-11.40AM</td>
		<td>Web Designing</td>
		<?php if ($name2=="empty"){?>
		<td><a href="#" onclick="openForm(2)">Click here to Register</a></td>
		<?php }
		else { ?>
		<td><?php echo $name2; }?></td>
		<td>Individual event</td>
		<td>-</td>
		</tr>
	<tr>
		<td>3.</td>
		<td>11:50AM-12:50PM</td>
		<td>Online Coding</td>
		<?php if ($name3=="empty"){?>
		<td><a href="#" onclick="openForm(3)">Click here to Register</a></td>
		<?php }
		else { ?>
		<td><?php echo $name3; }?></td>
		<td>
		<?php if($name3=="Registered"){
				if($member1=="Empty"){?>
					<a href="#" onclick="openForm(5)">Add Teammate</a>
				<?php } 
				else{
					echo $member1;
				}
		}
		else{echo "-";}
		?>
		</td>
		<td>
		<?php if($teamid1=='NULL'){ ?>
					-
		<?php }
				else{
					echo $teamid1;
				}
		?>
		</td>
		</tr>
	<tr>
		<td>4.</td>
		<td>01:30PM-03:00PM</td>
		<td>DB Mania</td>
		<?php if ($name4=="empty"){?>
		<td><a href="#" onclick="openForm(4)">Click here to Register</a></td>
		<?php }
		else { ?>
		<td><?php echo $name4; }?></td>	
		<td>
		<?php if($name4=="Registered"){ 
				if($member2=="Empty"){?>
					<a href="#" onclick="openForm(6)">Add Teammate</a>
				<?php } 
				else{
					echo $member2;
				}
			}
			else{
				echo "-";
			}
		?>
		</td>
		<td>
		<?php if($teamid2=='NULL'){ ?>
					-
		<?php }
				else{
					echo $teamid2;
				}
		?>
		</td>
		</tr>
</tbody>
</table>
  <p>
  <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instructions to add teammate:</b>
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Your teammate should signed up on this site.
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. You need your teammates login creadentials to add him/her as a teammate.
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. He/She should registered on the same event which you want to add.
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. And He/She should not have a teammate already. 
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="red" style="color:red;">5.If no teammates added, then you will be considered as individual participant.</a>
  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="red" style="color:red;">6.You may need your team id, when attending the event.</a>
  </P>
  </div>
</div>
<script>
function showEvents(str) {
	if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  };
  xmlhttp.open("GET","showdetails1.php?q="+str,true);
  xmlhttp.send();
}
   </script>
   <script>
function openForm(val) {
  if(val == 1){
  document.getElementById("myForm1").style.display = "block";
  }
  else if(val == 2){
  document.getElementById("myForm2").style.display = "block";
  }
  else if(val == 3){
  document.getElementById("myForm3").style.display = "block";
  }
  else if(val == 4){
  document.getElementById("myForm4").style.display = "block";
  }
  else if(val == 5){
  document.getElementById("myForm5").style.display = "block";
  }
  else if(val == 6){
  document.getElementById("myForm6").style.display = "block";
  }
}

function closeForm(val) {
if(val==1){
  document.getElementById("myForm1").style.display = "none";
}
else if(val==2){
  document.getElementById("myForm2").style.display = "none";
}
else if(val==3){
  document.getElementById("myForm3").style.display = "none";
}
else if(val==4){
  document.getElementById("myForm4").style.display = "none";
}
else if(val==5){
  document.getElementById("myForm5").style.display = "none";
}
else if(val==6){
  document.getElementById("myForm6").style.display = "none";
}
}
</script>
</body>
</html>
<?php } 
else{echo "<script>alert('You are not allowed to access the page without login'); window.location.href='index.html';</script>";}
?>