<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="favicon.ico"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel='stylesheet' text='text/css' href='main.css'/>
		<script type='text/javascript' src='script.js'></script>
	</head>
	<body>
		<header id="header">
			<div id="logo_container" class="absolute">
				<a href="index.php">
					<img class="absolute" id="logo" src="Photos/logo.png"/>
				</a>
			</div>
			
			<?php 
				$dbc = mysqli_connect("localhost","root","1280CBiscuit","my-db","3306");
		
				@session_start();
				@$id = $_SESSION["user_id"];
				@$user_type = @SESSION['user_type'];
            	
				@$sql = "SELECT Activated, full_name FROM mfi where user_id = '$id'";
            	@$query = mysqli_query($dbc,$sql);
            
            	if($query){
            		$row = mysqli_fetch_row($query);
            		$active = $row[0];
            		$full_name = $row[1];
            		
            		if($active == 'Y'){?>
            			<span id="account" class="inline"><font color="black"> <?php @print "Welcome " . $full_name . " <a href='#'><div id='dropdown' class='inline-block arrow-down'></div></a>"; ?> </font></span>
            			<?php 
            		}
            	}
            ?>
    	</header>
    	
		<table id="personal" class="display">
			<tr>
				<td>
					<a href="http://localhost/C_Biscuit/profile.php" id="personal_unit">Profile</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="http://localhost/C_Biscuit/logoutpage.php" id="personal_unit">Log Out</a>
				</td>
			</tr>
		</table>
		
		<hr>
	
	</body>
</html>