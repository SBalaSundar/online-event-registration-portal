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
?>
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
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

-->

    </style>
<?php if($eveno==1){ 
	if($event_1=='NULL'){ ?>
		
        <div class="modal-content" id="modal-content">
    <p align="center" class="style6"> </p>
    <table width="100%" border="0" bgcolor="#eaeded"><tr>
            <td><fieldset>
				<legend><h4>08:30AM - 10:00AM</h4></legend>
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
</div>
<?php
 }
	else{ ?>
		<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already Registerd for Poster Designing </span></legend>
					<h4>Event Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A self-explanatory poster has to be designed. The theme of the poster will be provided on the spot. </p>
					<h4>Rules</h4>
					<p>1.	Individual Event.</p>
					<p>2.	Participants should bring laptops.</p>
					<p>3.	Plagiarism will not be tolerated.</p>
					<p>4.	Softwares Required – Adobe Photoshop, CorelDRAW.</p>
					<p>5.	Theme will be given on spot.</p>
					<p>6.	Dimension : 400X600 mm.</p>
					
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
				</form></fieldset>
			</td>
        </tr>
<?php } 
	else { ?>
		<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already Registerd for Web Designing </span></legend>
					<h4>Event Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The theme of the Website will be provided on the spot. </p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	Individual Event with two rounds</p>
					<p style="margin:0.1;">2.	Round 1 : It consists of some basic questions on web development</p>
					<p style="margin:0.1;">3.	Round 2 : Be ready to code by connecting it with some back end. You can use PHP, HTML, CSS, Wamp Server(For back end)</p>
					<p style="margin:0.1;">4.	Decision of the jury is final.</p>
					<p style="margin:0.1;">5.	The moderators can disqualify the team if any malpractice is found.</p>
					<p style="margin:0.1;">6.	No web Templates.</p>	
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
                    <h4>Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The theme of the Website will be provided on the spot. </p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	A team can have a maximum of 2 participants.</p>
					<p style="margin:0.1;">2.	The actual competition would be hosted on an online platform and the link would be intimated.</p>
					<p style="margin:0.1;">3.	The length of the competition would be 2 days.</p>
					<p style="margin:0.1;">5.	Participants who are selected from the first day event would only be allowed for the second day event.</p>
					<p style="margin:0.1;">6.	The language for implementation is not restricted</p>
					<p align="center"><button type="submit" name="event3" class="btn">Confirm Registration</button></p>
					<button type="button" class="btn cancel" onclick="closeForm(3)">Close</button>
					</form>
					</fieldset>
			</td>
		</tr>
		
<?php } 
	else{ ?>
		<tr>
            <td>
                <fieldset>
                    <legend><span class="style6">You had already Registerd for Online Coding </span></legend>
					<p><b>Your Team mate :</b></P>
					<h4> Event Description</h4>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The theme of the Website will be provided on the spot. </p>
					<h4>Rules</h4>
					<p style="margin:0.1;">1.	A team can have a maximum of 2 participants.</p>
					<p style="margin:0.1;">2.	The actual competition would be hosted on an online platform and the link would be intimated.</p>
					<p style="margin:0.1;">3.	The length of the competition would be 2 days.</p>
					<p style="margin:0.1;">5.	Participants who are selected from the first day event would only be allowed for the second day event.</p>
					<p style="margin:0.1;">6.	The language for implementation is not restricted</p>	
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
				</form></fieldset>
            </td>
        </tr>
<?php } 
else { ?>
	<tr>
            <td>
                <fieldset>
				
				
                    <legend><span class="style6">You had already Registerd for DB Mania </span></legend>
					<h4>Event Description</h4>
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
</div>
