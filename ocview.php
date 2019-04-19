<?php
include 'connection.php';
?>
<html>
<head>
<style class="cp-pen-styles">@import url('https://fonts.googleapis.com/css?family=Amarante');
html { overflow-y: scroll; }
body { 
  background: #eee url('https://i.imgur.com/eeQeRmk.png'); /* https://subtlepatterns.com/weave/ */
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 70%;
  line-height: 1;
  color: #585858;
  padding: 22px 10px;
  padding-bottom: 55px;
}

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; } 

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 100%; }

h1 { 
  font-family: 'Amarante', Tahoma, sans-serif;
  font-weight: bold;
  font-size: 3.6em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}


/** page structure **/
#wrapper {
  display: block;
  width: 850px;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}

#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 10px 10px;
  padding-left: 10px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
  white-space: nowrap;
}

#keywords tbody tr td.lalign {
  text-align: left;
}</style>
</head>
<body>
<table id="keywords" cellspacing="0" cellpadding="0" border="2">
<thead>
<th>S.No</th>
<th>TeamId</th>
<th>Ans1</th>
<th>Ans2</th>
<th>Ans3</th>
<th>Ans4</th>
<th>Ans5</th>
<th>Ans6</th>
<th>Ans7</th>
<th>Ans8</th>
<th>Ans9</th>
<th>Ans10</th>
<th>Ans11</th>
<th>Ans12</th>
<th>Ans13</th>
<th>Ans14</th>
<th>Ans15</th>
<thead>
<tbody>
<?php
$i=1;
$sql = "select * from onlineprelims";
$res = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($res)){?>
	<tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $row['team_id']; ?></td>
	<td><?php echo $row['ans1l1']; ?></br><?php echo $row['ans1l2']; ?></td>
	<td><?php echo $row['ans2']; ?></td>
	<td><?php echo $row['ans3']; ?></td>
	<td><?php echo $row['ans4']; ?></td>
	<td><?php echo $row['ans5']; ?></td>
	<td><?php echo $row['ans6']; ?></td>
	<td><?php echo $row['ans7']; ?></td>
	<td><?php echo $row['ans8']; ?></td>
	<td><?php echo $row['ans9']; ?></td>
	<td><?php echo $row['ans10']; ?></td>
	<td><?php echo $row['ans11']; ?></td>
	<td><?php echo $row['ans12l1']; ?></br><?php echo $row['ans12l2']; ?></br><?php echo $row['ans12l3']; ?></td>
	<td><?php echo $row['ans13']; ?></td>
	<td><?php echo $row['ans14']; ?></td>
	<td><a href="<?php echo $row['team_id']; ?>.txt">View Program</a></td>
	<?php $i++; ?>
	</tr>
<?php } ?>