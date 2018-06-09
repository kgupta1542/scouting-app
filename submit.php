<?php 
	$match_number = $_REQUEST['mn'];
	$team_number = $_REQUEST['tn'];
	$alliance = $_REQUEST['a'];
	$start_pos = $_REQUEST['start'];
	$baseline = $_REQUEST['bl'];
	$switch_auto = $_REQUEST['swa'];
	$scale_auto = $_REQUEST['sca'];
	$switch_personal = $_REQUEST['swp'];
	$switch_other = $_REQUEST['swo'];
	$scale = $_REQUEST['sc'];
	$exchange = $_REQUEST['ex'];
	$endgame = $_REQUEST['end'];
	$result = $_REQUEST['res'];
	$comments = $_REQUEST['comments'];
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			include_once 'header.php';
			
			$alliance = substr($alliance,0,1);
			$start_pos = substr($start_pos,0,1);
			$baseline = substr($baseline,0,1);
			$endgame = substr($endgame,0,1);
			$result = substr($result,0,1);
			
			$sql = "insert into Scout values(null,'$match_number','$team_number','$alliance','$start_pos',
					'$baseline','$switch_auto','$scale_auto','$switch_personal','$switch_other','$scale',
					'$exchange','$endgame','$result','$comments','$id')";
			$query6 = mysqli_query($dbc,$sql);
		?>
	</body>
</html>