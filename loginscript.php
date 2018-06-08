<?php
$dbc = mysqli_connect("localhost","root","1280CBiscuit","my-db","3306");

	if(@$_POST['submit']){
		$username = strtolower($_POST['userName']);
		$password = $_POST['passWord'];
		
		$sql8 = "SELECT user_id, user_name, pass_word, member_type, activated FROM MFI WHERE user_name = '$username'";
		$query7 = mysqli_query($dbc,$sql8);
	}
	session_start();
	@$id = $_SESSION["user_id"];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="logo.png"/>
	<link rel='stylesheet' type='text/css' href='main.css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='text/javascript' src='script.js'></script>
</head>
<body>
<?php include_once 'header.php'; ?>
<br>
	<h1 align="center"><span style="color:mediumslateblue">
			<?php
			if($query7){
				$row = mysqli_fetch_row($query7);
				$user_id = $row[0];
				$dbUsername = $row[1];
				$dbPassword = $row[2];
				$user_type = $row[3];
				$active = $row[4];
				
				if($active == "N" && password_verify($password, $dbPassword) && $username == $dbUsername && $username !== ""){
					$sql9 = "update MFI set activated = 'Y' where user_id = '$user_id'";
					$query1 = mysqli_query($dbc,$sql9);?>
					You Are Logged In
				<?php
					$_SESSION["user_id"] = $user_id;
					$_SESSION["user_type"] = $user_type;
				
					if($user_type == "admin"){?>
						As An Admin!
						<br/>
						Please start customizing your <a href="http://localhost/Lost-N-Found-v1/customize.php">microsite</a>!
					<?php }
					else{?>
						As A User!
						<script type="text/javascript">	
					setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/scout.php"); }, 3000);
				</script>
					<?php }	
				}
				else{
					if($active == "Y"){?>
						This account is currently being used on another device. 
						<br/>
						Please log out and then try again.
					<?php }
					else{?>
						Please Try Again!
				<?php }?>
					<script type="text/javascript">	
						setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/index.php"); }, 4000);
					</script>
				<?php }
			}
			else{ ?>
				Please Try Again!
				<script type="text/javascript">	
					setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/index.php"); }, 4000);
				</script>
			<?php } ?>
				<br/></span></h1>		
</body>
</html>