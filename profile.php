<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php 
			include_once 'header.php'; 
			
			if($member !== "admin" && $member !== "user"){?>
				<script type="text/javascript">	
					setTimeout(function(){ window.location.replace("loginscript.php"); }, 5);
				</script>
				<?php 
			}
		?>
	
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
	
				if($active=='Y'){?>
					<h4>Name:</h4>
						<?php print " " . $dbFullName ?> 
						<br/>
						<br/> 
					<h4>Username:</h4> 
						<?php print " ". $dbUserName?> 
						<br/>
						<br/> 
					<h4>Email Address:</h4>
						<?php print " " . $dbEmail; 
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