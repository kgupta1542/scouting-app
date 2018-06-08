<?php
	$dbc = mysqli_connect("localhost","root","password","schema1","3306");
	
	session_start();
	@$id = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="logo.png"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel='stylesheet' text='text/css' href='main.css'/>
	<script type='text/javascript' src='script.js'></script>
</head>

<body><?php include_once 'header.php'; ?>
<h1 align="center"><span style="color:mediumslateblue">Ready to Analyze?</span></h1>
	<hr>
<input id="team_nm" type="text" class="fixed" placeholder="Team Number">
<br/>
<br/>
<button name="refresh" class="fixed" onclick="">Refresh</button>
<div id="txtHint" class="inline"></div>
</body>
</html>
