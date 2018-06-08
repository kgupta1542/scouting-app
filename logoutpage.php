<html>
	<head>
		<script type="text/javascript">	
			setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/index.php"); }, 2000);
		</script>
	</head>
	<body>
		<?php 
			include_once 'header.php'; 

			$sql = "UPDATE MFI SET Activated = 'N' WHERE user_id = '$id'";
			$query = mysqli_query($dbc,$sql);
		
			if($query){
				print "It worked! You are logged out!";
			}
			else{
				print "There was a problem...";
			}
		?>			
	</body>
</html>