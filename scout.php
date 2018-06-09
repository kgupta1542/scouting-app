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

		<div id="side_bar" class="absolute">
			<div id="side_bar_contents" class="fixed">
				<p class="fixed">Match Number:</p>
					<p id="match_nm" class="fixed"></p>
						<br/>
						<br/>
				<p class="fixed">Team Number:</p>
					<p id="team_nm" class="fixed"></p>
						<br/>
						<br/>
				<p class="fixed">Alliance:</p>
					<p id="alliance" class="fixed"></p>
			</div>
		</div>
		
		<div id="pre_game" class="scout display">	
       		<p align="center">
      			<input class="report" type="number" id="match_num" name="match_nm" placeholder="Match Number">
       				<br/>
       				<br/>
       			<input class="report" type="number" id="team_num" name="team_nm" placeholder="Team Number">
       				<br/>
       				<br/>
       			Alliance Color:
       			<div id="alliance_sel" class="btn_group">
       				<p align="center">
       					<button name="Red" class="btn light red">Red</button>
       					<button name="Blue" class="btn light blue">Blue</button>
       				</p>
       			</div>
				
				<p align="center">Starting Position:</p>
				<div id="start_pos" class="btn_group">
					<p align="center">
						<button name="Left" class="light btn">Left</button>
						<button name="Center" class="light btn">Center</button>
						<button name="Right" class="light btn">Right</button>
					</p>
				</div>
				<br/>
				
        		<p align="center">
        			<button id="auto_btn" class="btn">Auto ></button>
        		</p>
        	</p>
        </div>
        
        <div id="auto" class="scout">	
       		<p align="center">Baseline:</p>
       		<div id="baseline_sel" class="btn_group">
       			<p align="center">
       				<button name="Yes" class="btn light">Yes</button>
       				<button name="No" class="btn light">No</button>
       			</p>
       		</div>
				
			<p align="center">Switch:
				<span id="switch_auto">0</span>
			</p>
       		<div id="switch_auto_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>			
        	
        	<p align="center">Scale:
        		<span id="scale_auto">0</span>
        	</p>
       		<div id="scale_auto_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>			
       		<br/>
        	
        	<div class="btn_group">
        		<p align="center">
        			<button id="pregame_btn" class="btn">< Pre-Game</button>
        			<button id="teleop_btn" class="btn">Tele-Op ></button>
        		</p>
        	</div>
        </div>
	</body>
</html>
