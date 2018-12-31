<?php
	if($_POST['submit']){
		$username = strtolower($_POST['userName']);
		$password = password_hash($_POST['passWord'], PASSWORD_DEFAULT);
		$fullname = $_POST['fullName'];
		$email = $_POST['emailAddress'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Processing...</title>
		<script type="text/javascript">
			setTimeout(function(){ window.location.replace("http://localhost/C_Biscuit/index.php"); }, 4000);
		</script>
	</head>
	<body>
		<?php 
			include_once 'header.php';
			
			if(@$active !== 'Y' && $username !== "" && $password !== "" && $fullname !== "" && $email !== ""){
				$sql = "insert into MFI values(null,'$username', '$password', '$fullname','$email', 'N', 'user')";
				$query6 = mysqli_query($dbc,$sql);
			}
			if(@$query6){?>
				<h1 align="center"><span style="color:mediumslateblue">You Are Signed Up! <br/> You Will Be Redirected To The Sign In Page.<?php
				$sql7 = "SELECT user_id FROM mfi WHERE user_name = '$username'";
				$query10 = mysqli_query($dbc,$sql7);
		
				if($query10){
					$row1 = mysqli_fetch_row($query10);
					$user_id = $row1[0];
			
					$_SESSION["user_id"] = $user_id;
				}
			}
			else{?>
				<h1 align="center"><span style="color:mediumslateblue">There was some issue processing your request. <br> Please try again later.</span></h1>
				<?php 
			}
		?>
	</body>
</html>