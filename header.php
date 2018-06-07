<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="http://localhost/C_Biscuit/Photos/favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel='stylesheet' text='text/css' href='main.css'/>
	
</head>
<body><header id="jeff">
       		<div id="john" class="absolute"><img id="john1" src="Photos/logo.png"></div>
        	 <?php
            	$sql = "SELECT Activated, first_name FROM mfi where user_id = '$id'";
            	$query = mysqli_query($dbc,$sql);
            
            	if($query){
            		$row = mysqli_fetch_row($query);
            		$active = $row[0];
            		$first_name = $row[1];
            		
            		if($active == 'Y'){?>
            			<span id="account" class="inline-block"><font color="black"> <?php @print "Welcome " . $first_name . " <a href='#'><div class='dropdown inline arrow-down' id='dropdown'></div></a>"; ?> </font></span>
            		<?php 
            		}
            	}
            ?>
    </header>

<table id="personal" class="display">
<td><a href="http://localhost/Lost-N-Found-v1/profile.php" id="johnny">Profile</a></td>
</tr>
<tr>
<td><a href="http://localhost/Lost-N-Found-v1/logoutpage.php" id="johnny">Log Out</a></td>
</tr>
</table>
	<hr>
</body>
</html>