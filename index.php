<?php 
$link = mysql_connect("localhost", "american_allen", "scdni66ie!");

if (!$link) {    die('Could not connect: ' . mysql_error());}

$db_link = mysql_select_db("american_scd");
if(!$db_link){
die('sike!');
}

$query="SELECT * FROM league";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;

$c=0;

$query2="SELECT * FROM league2v2";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);
$i2=0;
$c2=0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SCD League</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<link href="images/icon.png" rel="apple-touch-icon" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="Keywords" content="StarCraft, SCD, StarCraft Dream, StarCraft II, league, competitive gaming" />
<meta name="Description" content="StarCraft Dream League information for mobile devices.  Users can see where they stand among other players and view profiles on the go." />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="icon" href="images/favicon.png" />
<link rel="shortcut icon" href="images/favicon.png" />
<link href="css/screen.css" rel="stylesheet" type="text/css" />


<script>
	window.scrollTo(0, 1);  
</script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	
		function switchpanes(fromid, toid) {
		$("#"+fromid)[0].style.display="none";
		$("#"+toid)[0].style.display="inline";
	}
</script>

</head>

<body>
	<div class="main_container">
		<div id="short">
		<div id="identity">
			<a href="index.html"><img src="images/logo.png" alt="Home" /></a>
		</div>
		
		<div id="l1v1">
			<div id="league_options">
				<ul>
					<li id="league_1v1" class="active"><a href="#" onfocus="this.blur()" onclick="switchpanes('l2v2', 'l1v1'); return false;">1v1</a></li>
					<li id="league_2v2" class="static"><a href="#" onfocus="this.blur()" onclick="switchpanes('l1v1', 'l2v2'); return false;">2v2</a></li>
				</ul>
			</div>
			<table>
			
<?php while ($i < 5) {

$rank=mysql_result($result,$i,"rank");
$username=mysql_result($result,$i,"username");
$wins=mysql_result($result,$i,"wins");
$losses=mysql_result($result,$i,"losses");
$rating=mysql_result($result,$i,"rating");
?>

				<tr class="<?php echo $c++&1 ? 'dark' : 'light'; ?>">
					<td class="user_rank"><?php echo"$rank"?></td>
					<td class="user_class"><img src="images/r_diamond.png" alt="" /></td>
					<td class="user_name"><?php echo"$username"?></td>
					<td class="user_stats"><?php echo"$wins-$losses<br />$rating"?></td>
				</tr>
				
<?php 
$i++;
}?>				
			</table>
			
			<div id="view_standings_1v1">
				<a href="#" onfocus="this.blur()" onclick="switchpanes('short', 'long'); return false;"><img src="images/view_standings.png" alt="View Complete Standings"/></a>
			</div>
		</div>
			

		<div id="l2v2" style="display: none;">
			<div id="league_options">
				<ul>
					<li id="league_1v1" class="static"><a href="#" onfocus="this.blur()" onclick="switchpanes('l2v2', 'l1v1');return false;">1v1</a></li>
					<li id="league_2v2" class="active"><a href="#" onfocus="this.blur()" onclick="switchpanes('l1v1', 'l2v2');return false;">2v2</a></li>
				</ul>
			</div>
			<table>
				<?php while ($i2 < 5) {

$rank2=mysql_result($result2,$i2,"rank");
$username2=mysql_result($result2,$i2,"username");
$wins2=mysql_result($result2,$i2,"wins");
$losses2=mysql_result($result2,$i2,"losses");
$rating2=mysql_result($result2,$i2,"rating");
?>

				<tr class="<?php echo $c2++&1 ? 'dark' : 'light'; ?>">
					<td class="user_rank"><?php echo"$rank2"?></td>
					<td class="user_class"><img src="images/r_diamond.png" alt="" /></td>
					<td class="user_name"><?php echo"$username2"?></td>
					<td class="user_stats"><?php echo"$wins2-$losses2<br />$rating2"?></td>
				</tr>
				
<?php 
$i2++;
}?>	
			</table>
			
			<div id="view_standings_2v2">
				<a href="#" onfocus="this.blur()" onclick="switchpanes('short', 'long'); return false;"><img src="images/view_standings.png" alt="View Complete Standings"/></a>
			</div>
		</div>
		</div>
		
		<div id="long" style="display: none;">
		<div id="identity">
			<a href="index.html"><img src="images/logo.png" alt="Home" /></a>
		</div>
		
		<div id="l1v1_l">
			<div id="league_options">
				<ul>
					<li id="league_1v1" class="active"><a href="#" onfocus="this.blur()" onclick="switchpanes('l2v2_l', 'l1v1_l'); return false;">1v1</a></li>
					<li id="league_2v2" class="static"><a href="#" onfocus="this.blur()" onclick="switchpanes('l1v1_l', 'l2v2_l'); return false;">2v2</a></li>
				</ul>
			</div>
			<table>
			
<?php 
$i=0;
while ($i < $num) {

$rank=mysql_result($result,$i,"rank");
$username=mysql_result($result,$i,"username");
$wins=mysql_result($result,$i,"wins");
$losses=mysql_result($result,$i,"losses");
$rating=mysql_result($result,$i,"rating");
?>

				<tr class="<?php echo $c++&1 ? 'light' : 'dark'; ?>">
					<td class="user_rank"><?php echo"$rank"?></td>
					<td class="user_class"><img src="images/r_diamond.png" alt="" /></td>
					<td class="user_name"><?php echo"$username"?></td>
					<td class="user_stats"><?php echo"$wins-$losses<br />$rating"?></td>
				</tr>
				
<?php 
$i++;
}?>				
			</table>
			
			<div id="view_standings_1v1">
				<a href="#" onfocus="this.blur()" onclick="switchpanes('long', 'short'); return false;"><img src="images/view_top5.png" alt="View Top 5 Standings"/></a>
			</div>
		</div>
			

		<div id="l2v2_l" style="display: none;">
			<div id="league_options">
				<ul>
					<li id="league_1v1" class="static"><a href="#" onfocus="this.blur()" onclick="switchpanes('l2v2_l', 'l1v1_l');return false;">1v1</a></li>
					<li id="league_2v2" class="active"><a href="#" onfocus="this.blur()" onclick="switchpanes('l1v1_l', 'l2v2_l');return false;">2v2</a></li>
				</ul>
			</div>
			<table>
				<?php
				$i2=0;
				while ($i2 < $num2) {

$rank2=mysql_result($result2,$i2,"rank");
$username2=mysql_result($result2,$i2,"username");
$wins2=mysql_result($result2,$i2,"wins");
$losses2=mysql_result($result2,$i2,"losses");
$rating2=mysql_result($result2,$i2,"rating");
?>

				<tr class="<?php echo $c2++&1 ? 'light' : 'dark'; ?>">
					<td class="user_rank"><?php echo"$rank2"?></td>
					<td class="user_class"><img src="images/r_diamond.png" alt="" /></td>
					<td class="user_name"><?php echo"$username2"?></td>
					<td class="user_stats"><?php echo"$wins2-$losses2<br />$rating2"?></td>
				</tr>
				
<?php 
$i2++;
}?>	
			</table>
			
			<div id="view_standings_2v2">
				<a href="#" onfocus="this.blur()" onclick="switchpanes('long', 'short'); return false;"><img src="images/view_top5.png" alt="View Top 5 Standings"/></a>
			</div>
		</div>
		</div>
	</div>
</body>
</html>