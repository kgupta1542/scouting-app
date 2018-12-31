<?php 
	include_once "header.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<script type='text/javascript' src='script.js'></script>
		<script>
			function getAnalytics() {
				var team = document.getElementById("team_nm").value;
				var dev = document.getElementById("devset").value;
				var analytics_type = document.getElementById("searchbar").value;
				var xhttp;    

				if (team == "") {
 				   document.getElementById("txtHint").innerHTML = "";
    				return;
  				}

				xhttp = new XMLHttpRequest();
  				xhttp.onreadystatechange = function(){
  	    			if (this.readyState == 4 && this.status == 200) {
      					document.getElementById("txtHint").innerHTML = this.responseText;
    				}
  				};

  		  		xhttp.open("GET", "http://localhost/C_Biscuit/"+analytics_type+".php?q="+team+"&r="+dev, true);
				xhttp.send();
			}
		</script>
		<style>
			#txtHint{
				position:absolute;
			}
			#sidebar{
				width:20%;
				display:inline-block;
			}
			#analytics_tbl, .analytics_head, .analytics_data{
	    		border: 1px solid black;
			}
			.analytics_data{
				width:16%;
			}
			#analytics_tbl{
				width:75%;
			}
		</style>
	</head>

	<body>
		<?php 			
			if($member !== "admin"){?>
					<script type="text/javascript">	
						setTimeout(function(){ window.location.replace("index.php"); }, 5);
					</script>
				<?php 
				}
		?>
		<h1 align="center">
			<span style="color:mediumslateblue">Ready to Analyze?</span>
		</h1>
		<hr>
		<div id="sidebar">
			<div>Team Numbers:</div>
			<input id="team_nm" type="text" class="fixed" placeholder="Separate by commas">
			<br/>
			<br/>
			<div># of Standard Deviations:</div>
			<input id="devset" type="number" class="fixed" min="0.5" placeholder="Enter a value">
			<br/>
			<br/>
			<div>Type of Data:</div>
			<select id="searchbar" calss="fixed" name="analytics_type">
				<option value="getanalytics" selected>Analytics</option>
				<option value="getstats">Team Stats</option>
			</select>
			<br/>
			<br/>
			<button name="refresh" class="fixed" onclick="getAnalytics()">Search</button>
		</div>
		
		<div id="txtHint" class="inline"></div>
	</body>
</html>
