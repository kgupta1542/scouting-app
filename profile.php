<?php
	$dbc = mysqli_connect("localhost","root","1280CBiscuit","my-db","3306");
	
	session_start();
	@$id = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel='stylesheet' text='text/css' href='main.css'/>
	<script type='text/javascript' src='script.js'></script>
</head>
<body><?php include_once 'header.php'; ?>
	<h1 align="center"><span style="color:mediumslateblue">Did You Need To Change Something? </span> <br/> <span style="color:limegreen">You Can Fix It Right Away!</span></h1>
	<hr>
	<?php 
	if($id > 0){
	$sql = "SELECT full_name, user_name, email, activated FROM mfi WHERE user_id = '$id'";
	$query = mysqli_query($dbc, $sql);
	
	$row1 = mysqli_fetch_row($query);
	$dbFullName = $row1[0];
	$dbUserName = $row1[1];
	$dbEmail = $row1[2];
	$active = $row1[3];
	
		if($active=='Y'){
			?>
			<h4 class="blue">Name:</h4><?php print " " . $dbFullName ?> <br/><br/> 
			<h4 class="blue">Username:</h4> <?php print " ". $dbUserName?> <br/><br/> 
			<h4 class="blue">Email Address:</h4><?php print " " . $dbEmail; 
		}
		else{
			print "Please sign in...";	
		}
	}
	else{
		print "Please sign in...";
	}
	?>
</body>
</html>