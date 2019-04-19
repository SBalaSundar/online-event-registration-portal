<?php
	//include 'connection.php';
	session_start();
	if($_SESSION['id']==""){header('location:index.html');}
else{ 
include 'connection.php';
$sql = "select * from participants where ad_no = '".$_SESSION['id']."'";
$res = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($res)){
	$event_1 = $row['event_1'];
	$event_2 = $row['event_2'];
	$event_3 = $row['event_3'];
	$event_4 = $row['event_4'];
}
$sql1= "select event_name,dept from events where event_id='".$event_1."'";
$sql2= "select event_name,dept from events where event_id='".$event_2."'";
$sql3= "select event_name,dept from events where event_id='".$event_3."'";
$sql4= "select event_name,dept from events where event_id='".$event_4."'";
$res1 = mysqli_query($con, $sql1);
$res2 = mysqli_query($con, $sql2);
$res3 = mysqli_query($con, $sql3);
$res4 = mysqli_query($con, $sql4);
if($res1->num_rows!=0){
	while($row1=mysqli_fetch_array($res1)){
		$name1 = $row1['event_name'];
		$dept1 = $row1['dept'];
		$status1 = $row1['status1'];
	}
}
else{
	$name1 = "<a href='#' onclick='return showEvents(1);'>Select an Event</a>";
	$dept1 = "-";
	$status1 ="Not Registered";
	}
if($res2->num_rows!=0){
	while($row2=mysqli_fetch_array($res2)){
		$name2 = $row2['event_name'];
		$dept2 = $row2['dept'];
		$status2 = $row1['status2'];
	}
}
else{
	$name2 = "<a href='#' onclick='return showEvents(2);'>Select an Event</a>";
	$dept2 = "-";
	$status2 ="Not Registered";
}
if($res3->num_rows!=0){
	while($row3=mysqli_fetch_array($res3)){
		$name3 = $row3['event_name'];
		$dept3 = $row3['dept'];
		$status3 = $row1['status3'];
	}
}
else{
	$name3 = "<a href='#' onclick='return showEvents(3);'>Select an Event</a>";
	$dept3 = "-";
	$status3 ="Not Registered";
}
if($res4->num_rows!=0){
	while($row4=mysqli_fetch_array($res4)){
		$name4 = $row4['event_name'];
		$dept4 = $row4['dept'];
		$status4 = $row1['status4'];
	}
}
else{
	$name4 = "<a href='#' onclick='return showEvents(4);'>Select an Event</a>";
	$dept4 = "-";
	$status4 ="Not Registered";
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
  margin: 20px auto;
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

</style>
</head>
<body>
<div class="sidebar">
  <a></a>
  <a class="active" href="#" onclick="return showEvents(1);">Event-1 08:30AM - 10:00AM</a>
  <a href="#" onclick="return showEvents(2);">Event-2 10:10AM - 11.40AM</a>
  <a href="#" onclick="return showEvents(3);">Event-3 11:50AM - 12:50PM</a>
  <a href="#" onclick="return showEvents(4);">Event-4 01:30PM - 03:00PM</a>
  <a href="logout.php">Logout</a>
</div>
<div class="content">
<div class="sticky"><p align="center"><img src="banner.jpg" height="120" width="80%"></p></div>
  <div id="txtHint">
 <table border="1" align="center">
	<thead>
	<tr>
		<th>S.No</th>
		<th>Time</th>
		<th>Registered Event</th>
		<th>Event Conducted By</th>
		<th>Confirmation Status</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>1.</td>
		<td>08:30AM-10:00AM</td>
		<td><?php echo $name1;?></td>
		<td><?php echo $dept1;?></td>
		<td><?php echo $status1;?></td>
	</tr>
	<tr>
		<td>2.</td>
		<td>10:10AM-11.40AM</td>
		<td><?php echo $name2;?></td>
		<td><?php echo $dept2;?></td>
		<td><?php echo $status2;?></td>
	</tr>
	<tr>
		<td>3.</td>
		<td>11:50AM-12:50PM</td>
		<td><?php echo $name3;?></td>
		<td><?php echo $dept3;?></td>
		<td><?php echo $status3;?></td>
	</tr>
	<tr>
		<td>4.</td>
		<td>01:30PM-03:00PM</td>
		<td><?php echo $name4;?></td>
		<td><?php echo $dept4;?></td>
		<td><?php echo $status4;?></td>
	</tr>
</tbody>
</table>
<table border="1" align="center">
	<thead>
	<tr>
		<th>Department</th>
		<th>Faculty In-Charge for Registration</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Civil</td>
		<td>Mrs.J.Jeyanthi, Sr.AP/Civil</td>
	</tr>
	<tr>
		<td>EEE</td>
		<td>Mrs.S.Alagammal, AP(Sr.Gr.)/EEE</td>
	</tr>
	<tr>
		<td>ECE</td>
		<td>Mrs.E.Rajalakshmi, AP/ECE</td>
	</tr>
	<tr>
		<td>CSE/IT</td>
		<td>Mrs.M.S.Bhuvaneswari, AP(Sr.G)/CSE</td>
	</tr>
	<tr>
		<td>MECH</td>
		<td>Mr.S.Senthil Murugan, AP(Sr.Gr.)/Mech</td>
	</tr>
	<tr>
		<td>Bio-Tech</td>
		<td>Mrs.A.Arul jayanthi, AP/BT</td>
	</tr>
	<tr>
		<td>MCA</td>
		<td>Mr.J.Murugachandravel, AP(Sl.Gr)/MCA<br>
			Mr.K.Kanagraj, AP(Sr.Gr.)/MCA<br>
</td>
	</tr>
	<tr>
		<td>S &amp H</td>
		<td>
		Mr.A.Rajesh  Kannan,AP(Sr.Gr)/MAT<br>
		Dr.A.Sakthivel, AP(Sr.Gr)/Che<br>
		Mrs.S.Saratha Devi, AP(Sr.Gr)/MAT<br>
		</td>
	</tr>
</tbody>
</table>
  <p></P>
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
  xmlhttp.open("GET","showdetails.php?q="+str,true);
  xmlhttp.send();
}
   </script>
</body>
</html>
<?php } ?>