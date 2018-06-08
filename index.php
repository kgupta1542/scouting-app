<?php
	$dbc = mysqli_connect("localhost","root","password","schema1","3306");
	
	session_start();
	@$id = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' href='style.css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel='stylesheet' text='text/css' href='main.css'/>
		<script type='text/javascript' src='script.js'></script>
	</head>
	<body>
		<?php 
			include_once 'header.php'; 
		
			if($active == "Y"){?>
				<script type="text/javascript">	
					setTimeout(function(){ window.location.replace("scout.php"); }, 250);
				</script>
		<?php }?>
		
		<div id="login">
			<h1 align="center"><span style="color:mediumslateblue">Already Part of The Club? </span> <br/> <span style="color:limegreen">Go Ahead and Log In!</span></h1>
			<hr>
			
			<form action="loginscript.php" method="post">
        		<p align="center">
        			Username:
        			<br>
        			<input type="text" name="userName">
        			<br>
        			<br>
        			Password:
        			<br>
        			<input type="password" name="passWord">
					<br>
					<br>
        			<input type="submit" name="submit" value="Log In">
        		</p>
    		</form>
    		
    		<p align="center"><a class="switch" href="#">Don't have an account?</a></p>
    	</div>
    		
    	<div id="signup" class="display">
				<h1 align="center">
					<span style="color:mediumslateblue">Not Part of the Club Yet? </span>
					<br/> 
					<span style="color:limegreen">Go Ahead and Join Today!</span>
				</h1>
			<hr>
			<form action="sendsignupinfo.php" method="post">
        		<p align="center">
        			Username:
        			<br>
        			<input type="text" name="userName">
        			<br>
        			<br>
        			Password:
        			<br>
        			<input type="password" name="passWord">
					<br>
					<br>
					Full Name:
					<br>
					<input type="text" name="fullName">
					<br>
					<br>
					Email:
					<br>
					<input type="text" name="emailAddress">
					<br>
					<br>
        			<input type="submit" name="submit" value="Sign Up">
        		</p>
    		</form>
    		
    		<p align="center"><a class="switch" href="#">Already have an account?</a></p>
    	</div>
	</body>
</html>
