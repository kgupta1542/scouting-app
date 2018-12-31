<?php 
	$str = @$_REQUEST['q'];
	$devset = @$_REQUEST['r'];
	$dbc = mysqli_connect("localhost","root","C_BiscuitApp","my-db","3306");

	function arr_mean($array){
		return @(array_sum($array)/count($array));
	}
	
	function std_dev($array){
		$avg = arr_mean($array);
		$counter = 0;
		$ct = count($array);
	
		for($x=0;$x<$ct;$x++){
			$counter += pow(($avg - $array[$x]),2);
		}

		$dev = pow(($counter/$ct),.5);

		return ($dev);
	}
		
	function outlier($dev,$devset,$array){
		$diff = $dev * $devset;
		$ct = count($array);
		$avg = arr_mean($array);
	
		for($x=0;$x<$ct;$x++){
			$abs = abs($array[$x] - $avg);
			if($abs > $diff){
				unset($array[$x]);
			}
		}
		return $array;
	}
		
	function analytics($array, $devset){
		$arr = outlier(std_dev($array),$devset,$array);
		return arr_mean($arr);
	}			
?>

<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
	<table id="analytics_tbl">
		<tr>
			<th class="analytics_head">Team Number</th>
			<th class="analytics_head">Switch (Auto) </th>
			<th class="analytics_head">Scale (Auto) </th>
			<th class="analytics_head">Switch (Personal)</th>
			<th class="analytics_head">Switch (Other)</th>
			<th class="analytics_head">Scale (TeleOp)</th>
			<th class="analytics_head">Exchange</th> 
		</tr>
	<?php 	
		$orig_val = array();
		$cat_arr = array("switch_auto", "scale_auto", "switch_personal", "switch_other", "scale","ex_change");
		$tm_arr = explode(", ",$str);
		//$tm_arr = array("1280","254");
		
		for($i=0;$i<count($tm_arr);$i++){
			$sql1 = "SELECT * FROM Scout WHERE team_nm = '$tm_arr[$i]';";
			$query1 = mysqli_query($dbc,$sql1);
			$row_ct = mysqli_num_rows($query1);?>
			
			<tr>
			<td class="analytics_data"><?php echo($tm_arr[$i]); ?> </td>
		
		<?php 		
			for($j=0;$j<count($cat_arr);$j++){
				$orig_val = array("");
				$sql = "SELECT " . $cat_arr[$j] . " FROM Scout WHERE team_nm = '$tm_arr[$i]';";
				$query3 = mysqli_query($dbc,$sql);
			
				if($query3){
					for($k=0;$k< mysqli_num_rows($query3);$k++){
						$orig_val[$k] = mysqli_fetch_row($query3)[0];
					}
			
					if($orig_val !== array("")){?>
						<td class="analytics_data">
							<a href="#" class="avg" id="<?php echo($i . "_" . $j) ?>">
								<?php echo(analytics($orig_val, $devset));?>
							</a>
							<div id="<?php echo("data-" . $i . "_" . $j) ?>" class="display">
								<?php var_dump($orig_val);?>
							</div> 
						</td>
					
					<?php 
					}
				}
			}
			
			echo("</tr>");
		}
	?>	
	</tbody>
	</table>
	</body>
</html>
