<html>
<head>
<link rel='stylesheet' text='text/css' href='main.css'/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript' src='script.js'></script>
</head>
<body>
<?php include_once 'header.php'; ?>
<?php
	$dbc = mysqli_connect("localhost", "root", "1280CBiscuit", "my-db", "3306");

	session_start();
	$id = $_SESSION['user_id'];

	$sql = "UPDATE MFI SET Activated = 'N' WHERE user_id = '$id'";
	$query = mysqli_query($dbc,$sql);
		
	if($query){
		print "It worked! You are logged out!";
	}
	else{
		print "There was a problem...";
	}

?>		
<script type="text/javascript">	
	setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/index.php"); }, 2000);
</script>
			
</body>
</html>