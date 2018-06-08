<!DOCTYPE html>
<html>
	<head>	
	</head>
	<body>
		<?php 
			include_once 'header.php'; 
		?>

		<h1 align="center"><span style="color:mediumslateblue">Ready to Scout?</span></h1>
		<hr>

		<div id="side_bar" class="fixed">
			<p id="team_nm" class="fixed">Team Number: </p>
				<br/>
				<br/>
			<p id="match_nm" class="fixed">Match Number: </p>
				<br/>
				<br/>
			<p id="alliance" class="fixed">Alliance: </p>
		</div>
		
		<div id="txt_Hint" class="inline">	
       		<p align="center">
      			<input class="report" type="number" id="match_num" name="match_nm" placeholder="Match Number">
       				<br/>
       				<br/>
       			<input class="report" type="number" id="team_num" name="team_nm" placeholder="Team Number">
       				<br/>
       				<br/>
       			Alliance Color:
       			<div class="btn_group">
       				<p align="center">
       					<button name="red" class="btn red">Red</button>
       					<button name="blue" class="btn blue">Blue</button>
       				</p>
       			</div>
				
				<p align="center">Starting Position:</p>
				<div class="btn_group">
					<p align="center">
						<button class="btn">Left</button>
						<button class="btn">Center</button>
						<button class="btn">Right</button>
					</p>
				</div>
				<br/>
        		<p align="center">
        			<button class="btn">Tele-Op ></button>
        		</p>
        	</p>
        </div>
	</body>
</html>
