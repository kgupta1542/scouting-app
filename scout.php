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
						<br/>
						<br/>
						<br/>
				<p class="fixed">
					<button id="show_cmt" class="btn">Take Notes</button>
				</p>
			</div>
		</div>
		
		<div id="comment_box">
			<p align="center">
				<textarea class="display" id="comment" rows="6" cols="65"></textarea>
			</p>
		</div>
		
		<div id="pre_game" class="scout">	
       		<p align="center">
      			<input class="report" type="number" id="match_num" name="match_nm" placeholder="Match Number">
       				<br/>
       				<br/>
       			<input class="report" type="number" id="team_num" name="team_nm" placeholder="Team Number">
       				<br/>
       				<br/>
       			<p align="center">Alliance Color:</p>
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
        
        <div id="auto" class="scout display">	
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
        			<button id="pregame_back_btn" class="btn">< Pre-Game</button>
        			<button id="teleop_btn" class="btn">Tele-Op ></button>
        		</p>
        	</div>
        </div>
        
        <div id="teleop" class="scout display">	
       		<p align="center">Personal Switch:
				<span id="switch_personal">0</span>
			</p>
       		<div id="switch_personal_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>	
				
			<p align="center">Opponent Switch:
				<span id="switch_other">0</span>
			</p>
       		<div id="switch_other_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>			
        	
        	<p align="center">Scale:
        		<span id="scale">0</span>
        	</p>
       		<div id="scale_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>
       		
       		<p align="center">Exchange:
        		<span id="exchange">0</span>
        	</p>
       		<div id="exchange_sel" class="btn_group_bi">
       			<p align="center">
       				<button name="plus" class="btn plus">+</button>
       				<button name="minus" class="btn minus">-</button>
       			</p>
       		</div>			
       		<br/>
        	
        	<div class="btn_group">
        		<p align="center">
        			<button id="auto_back_btn" class="btn">< Auto</button>
        			<button id="endgame_btn" class="btn">End Game ></button>
        		</p>
        	</div>
        </div>
        
        <div id="endgame" class="scout display">
        	<p align="center">End Status:</p>
			<div id="endgame_sel" class="btn_group">
				<p align="center">
					<button name="Climb" class="light btn">Climb</button>
					<button name="Park" class="light btn">Park</button>
					<button name="None" class="light btn">None</button>
				</p>
			</div>
			
			<p align="center">Result</p>
       		<div id="result_sel" class="btn_group">
       			<p align="center">
       				<button name="Won" class="btn light">Won</button>
       				<button name="Lost" class="btn light">Lost</button>
       			</p>
       		</div>
       		
       		<p align="center">Comments?</p>
       		<div id="comments_sel">
       			<p align="center">
       				<textarea id="comments" name="comments" rows="6" cols="65"></textarea>			
  				</p>
  			</div>  
  			<br/>
  			
  			<div class="btn_group">
        		<p align="center">
        			<button id="teleop_back_btn" class="btn">< Tele-op</button>
        			<button id="submit_btn" class="btn">Submit ></button>
        		</p>
        	</div>    
        </div>
	</body>
</html>
