<?php
include 'connection.php';	
session_start();
$eveno = $_GET['q'];
$name1="";
$name2="";
$name3="";
$name4="";
$event_1="";
$event_2="";
$event_3="";
$event_4="";
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
while($row1=mysqli_fetch_array($res1)){
$name1 = $row1['event_name'];
$dept1 = $row1['dept'];
}
while($row2=mysqli_fetch_array($res2)){
	$name2 = $row2['event_name'];
	$dept2 = $row2['dept'];
}
while($row3=mysqli_fetch_array($res3)){
	$name3 = $row3['event_name'];
	$dept3 = $row3['dept'];
}
while($row4=mysqli_fetch_array($res4)){
	$name4 = $row4['event_name'];
	$dept4 = $row4['dept'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Event Details</title>
    <style type="text/css">
        <!--
        .style6 {
            font-family: Georgia, "Times New Roman", Times, serif;
            font-weight: bold;
            color: #330033;
        }

        body {
            background-color: #ffffff;
        }
		.tr1:hover {
            background-color: #0CCCCF;
        }

            .tr1:hover td {
                background-color: transparent;
            }

        .styled-select select {
   background: transparent;
   width: 268px;
   padding: 5px;
   font-size: 16px;
   line-height: 1;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
   }
   
   .styled-select {
   width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(new_arrow.png) no-repeat right #ddd;
   border: 1px solid #ccc;
   }
.styled-select1 {   width: 240px;
   height: 34px;
   overflow: hidden;
   background: url(new_arrow.png) no-repeat right #ddd;
   border: 1px solid #ccc;
}
.style11 {color: #FFFFFF; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; }
.style25 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; color: #330033; font-size: 12px; }
.style26 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #330033; font-size: 12px; }
.style27 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; color: #CC0000; font-size: 12px; }
-->

    </style>
</head>

<body>
<form method="post" action="addevent.php">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded">
<?php if($eveno==1){ 
	if($event_1=='NULL'){
		
?>
        <tr>
            <td><fieldset>
				<legend><h4>08:30AM - 10:00AM</h4></legend>
				<form method="POST" action="addevent.php">
				<p><input type="radio" name="radio1" value="14" class="option-input radio"/><span class="style6">Poster Designing(By CSE/IT)</span></p>
				<p><input type="radio" name="radio1" value="11" class="option-input radio"/><span class="style6">Draftrix - 3D Modeling(By CIVIL)</span>
				</p><p><input type="radio" name="radio1" value="12" class="option-input radio"/><span class="style6">Paper Presentation(By EEE)</span>
				</p><p><input type="radio" name="radio1" value="13" class="option-input radio"/><span class="style6">Rummy Fication(By ECE)</span>
				</p><p><input type="radio" name="radio1" value="15" class="option-input radio"/><span class="style6">Mech Lathe(By MECH)</span>
				</p><p><input type="radio" name="radio1" value="16" class="option-input radio"/><span class="style6">PETRIPHILES(By Bio-Tech)</span>
				</p><p><input type="radio" name="radio1" value="17" class="option-input radio"/><span class="style6">Paper Presentation(By MCA)</span>
				</p><p><input type="radio" name="radio1" value="18" class="option-input radio"/><span class="style6">Zip the Lip(By S &amp H)</span>
				<p align="center"><input type="submit" text="submit"/></p>
				</form>
			</p></fieldset></td>
        </tr>
<?php }
	else{ ?>
		<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already selected </span></legend>
					<p><b><?php echo $name1; ?>&nbsp;-&nbsp;Conducted by&nbsp;(<?php echo $dept1; ?>)</b></p>
						
                </fieldset>
            </td>
        </tr>
<?php	} 
}
?>
<?php if($eveno==2){ 
	if($event_2=='NULL'){ ?>
        <tr >
            <td>	<fieldset>
					<legend><h4>10:10AM - 11:40AM</h4></legend>
					<form method="POST" action="addevent.php">
                    <input type="radio" name="radio2" value="24" class="option-input radio"/><span class="style6">Web Designing Contest(By CSE/IT)</span>
					<p><input type="radio" name="radio2" value="21" class="option-input radio"/><span class="style6">Idea Presentation/Startups(By CIVIL) - Mrs.J.Jeyanthi, Sr.AP/Civil</span></p>
					<p><input type="radio" name="radio2" value="22" class="option-input radio"/><span class="style6">Potter Brain (Technical Quiz)(By EEE)</span></P>
					<p><input type="radio" name="radio2" value="23" class="option-input radio"/><span class="style6">Paper Presentation(By ECE)</span></p>
					<p><input type="radio" name="radio2" value="25" class="option-input radio"/><span class="style6">Paper presentation(By MECH)</span></p>
					<p><input type="radio" name="radio2" value="26" class="option-input radio"/><span class="style6">MERCHANT IN ‘U’(By Bio-Tech)</span></p>
					<p><input type="radio" name="radio2" value="27" class="option-input radio"/><span class="style6">Treasure Hunt(By MCA)</span></p>
					<p><input type="radio" name="radio2" value="28" class="option-input radio"/><span class="style6">TRIPPY BUZZ(By S &amp H)</span></p>
					<p align="center"><input type="submit" text="submit"/></p>
					</fieldset></form>
			</td>
        </tr>
<?php } 
	else { ?>
		<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already selected </span></legend>
					<p><b><?php echo $name2; ?>&nbsp;-&nbsp;Conducted by&nbsp;(<?php echo $dept2; ?>)</b></p>
						
                </fieldset>
            </td>
        </tr>
<?php 
	}
}
?> 
<?php if($eveno==3){
if($event_3=='NULL'){ ?>
        <tr>
            <td>	<fieldset>
					<legend><h4>11:50AM - 12:50PM</h4></legend>
					<form method="POST" action="addevent.php">
					<input type="radio" name="radio3" value="34" class="option-input radio"/><span class="style6">Online Coding Contest(By CSE/IT)</span></legend>
					<p><input type="radio" name="radio3" value="31" class="option-input radio"/><span class="style6">Make ‘n Break(Spot Modeling)(By CIVIL)</span></P>
					<p><input type="radio" name="radio3" value="32" class="option-input radio"/><span class="style6">Hungry Bears(Treasure Hunt)(By EEE)</span></p>
					<p><input type="radio" name="radio3" value="33" class="option-input radio"/><span class="style6">Mind Kraft (Project Presentation)(By ECE)</span></p>
					<p><input type="radio" name="radio3" value="35" class="option-input radio"/><span class="style6">Technical video (or) Image presentation(By MECH)</span></p>
					<p><input type="radio" name="radio3" value="36" class="option-input radio"/><span class="style6">MOUSY TRICK(By Bio-Tech)</span></p>
					<p><input type="radio" name="radio3" value="37" class="option-input radio"/><span class="style6">Quiz(By MCA)</span></p>
					<p><input type="radio" name="radio3" value="38" class="option-input radio"/><span class="style6">FICTION WRITING(By S &amp H)</span></p>
					<p align="center"><input type="submit" text="submit"/></p>
					</fieldset></form>
			</td>
		</tr>
		
<?php } 
	else{ ?>
		<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already selected </span></legend>
					<p><b><?php echo $name3; ?>&nbsp;-&nbsp;Conducted by&nbsp;(<?php echo $dept3; ?>)</b></p>
						
                </fieldset>
            </td>
        </tr>
<?php
	}
}
?> 
<?php if($eveno==4){
if($event_4=='NULL'){ ?>
        <tr>
            <td>    <fieldset>
					<legend><h4>01:30PM - 03:00PM</h4></legend>
					<form method="POST" action="addevent.php">
					<input type="radio" id="44" name="radio4" value="44" onclick="ShowHideDiv()" class="option-input radio"/><span class="style6" >DB Mania(By CSE/IT)</span></legend>
					<div id="team" style="display:none">Team Member:
					<input type="text" id="member" /></div>
					<p><input type="radio" name="radio4" value="41" class="option-input radio"/><span class="style6">Brick Battle(By CIVIL)</span></P>
					<p><input type="radio" name="radio4" value="42" class="option-input radio"/><span class="style6">Idea Presentation(By EEE)</span></p>
					<p><input type="radio" name="radio4" value="43" class="option-input radio"/><span class="style6">Covert Pixels(By ECE)</span></p>
					<p><input type="radio" name="radio4" value="45" class="option-input radio"/><span class="style6">Prototype Modelling(By MECH)</span></p>
					<p><input type="radio" name="radio4" value="46" class="option-input radio"/><span class="style6">CLOVER PROBE(By Bio-Tech)</span></p>
					<p><input type="radio" name="radio4" value="47" class="option-input radio"/><span class="style6">Debugging(By MCA)</span></p>
					<p align="center"><input type="submit" text="submit"/></p>
					</fieldset>
					</form>
            </td>
        </tr>
<?php } 
else { ?>
	<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already selected </span></legend>
					<p><b><?php echo $name4; ?>&nbsp;-&nbsp;Conducted by&nbsp;(<?php echo $dept4; ?>)</b></p>
						
                </fieldset>
            </td>
        </tr>
<?php
}
}
?> 
        <tr>
            <td>
                <div align="center"></div>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
</form> 
</body>
</html>
