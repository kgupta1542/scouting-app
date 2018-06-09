//Define all variables so that they are global
var match_number;
var team_number;
var alliance = "";
var start_pos = "";
var baseline = "";
var switch_auto = 0;
var scale_auto = 0;
var switch_personal = 0;
var switch_other = 0;
var scale = 0;
var exchange = 0;
var endgame = "";
var result = "";
var comments = "";

//AJAX submisstion function
function submitData() {
	var xhttp;    
	xhttp = new XMLHttpRequest();
	xhttp.open("GET", "submit.php?mn="+match_number
			+"&tn="+team_number
			+"&a="+alliance
			+"&start="+start_pos
			+"&bl="+baseline
			+"&swa="+switch_auto
			+"&sca="+scale_auto
			+"&swp="+switch_personal
			+"&swo="+switch_other
			+"&sc="+scale
			+"&ex="+exchange
			+"&end="+endgame
			+"&res="+result
			+"&comments="+comments, true);
	xhttp.send();
	
	setTimeout(function(){ window.location.replace("scout.php"); }, 250);
}

//JQuery scripts
$(document).ready(function(){
	//General scripts
    $(".switch").click(function(){//Toggle between log-in and sign-up
    	$("#signup").toggleClass("display");
    	$("#login").toggleClass("display");
	});
    $("#dropdown").click(function(){//Dropdown personal menu
		$("#personal").toggleClass("display").toggleClass("inline-block");
    });
    $(".btn_group .btn").click(function(){//Button effects
        $(this).siblings().addClass("light"); 
        $(this).removeClass("light");
    });
    
    //Pre-game scouting scripts
    $("#match_num").change(function(){//Save match number
    	match_number = $("#match_num").val();
    	$("#match_nm").text(match_number);
    });
    $("#team_num").change(function(){//Save team number
    	team_number = $("#team_num").val();
    	$("#team_nm").text(team_number);
    });
    $("#alliance_sel .btn").click(function(){//Save alliance color
    	alliance = $(this).attr("name");
    	$("#alliance").text(alliance);
    });
    $("#start_pos .btn").click(function(){//Save starting position
    	start_pos = $(this).attr("name");
    });
    $("#auto_btn").click(function(){//Go on to Auto scouting
    	if(match_number > 0 && team_number > 0 && alliance !== "" && start_pos !== ""){
    		$("#pre_game").toggleClass("display");
    		$("#auto").toggleClass("display");
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
    
    //Auto scouting scripts
    $("#baseline_sel .btn").click(function(){//Save baseline boolean
    	baseline = $(this).attr("name");
    })
    $("#switch_auto_sel .btn").click(function(){//Save switch amount in auto
    	if($(this).attr("name") == "plus"){
    		switch_auto = switch_auto + 1;
    	}
    	else{
    		switch_auto = switch_auto - 1;
    	}
    	
    	$("#switch_auto").text(switch_auto);
    });
    $("#scale_auto_sel .btn").click(function(){//Save scale amount in auto
    	if($(this).attr("name") == "plus"){
    		scale_auto = scale_auto + 1;
    	}
    	else{
    		scale_auto = scale_auto - 1;
    	}
    	
    	$("#scale_auto").text(scale_auto);
    });
    $("#pregame_back_btn").click(function(){//Return to Pre-Game scouting
    	$("#pre_game").toggleClass("display");
    	$("#auto").toggleClass("display");
    });
    $("#teleop_btn").click(function(){//Go on to Tele-Op scouting
    	if(baseline !== "" && switch_auto >= 0 && scale_auto >= 0){
    		$("#auto").toggleClass("display");
    		$("#teleop").toggleClass("display");
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
    
    //Teleop scouting scripts
    $("#switch_personal_sel .btn").click(function(){//Save personal switch amount
    	if($(this).attr("name") == "plus"){
    		switch_personal = switch_personal + 1;
    	}
    	else{
    		switch_personal = switch_personal - 1;
    	}
    	
    	$("#switch_personal").text(switch_personal);
    });
    $("#switch_other_sel .btn").click(function(){//Save opponent switch amount
    	if($(this).attr("name") == "plus"){
    		switch_other = switch_other + 1;
    	}
    	else{
    		switch_other = switch_other - 1;
    	}
    	
    	$("#switch_other").text(switch_other);
    });
    $("#scale_sel .btn").click(function(){//Save switch amount
    	if($(this).attr("name") == "plus"){
    		scale = scale + 1;
    	}
    	else{
    		scale = scale - 1;
    	}
    	
    	$("#scale").text(scale);
    });
    $("#exchange_sel .btn").click(function(){//Save exchange amount
    	if($(this).attr("name") == "plus"){
    		exchange = exchange + 1;
    	}
    	else{
    		exchange = exchange - 1;
    	}
    	
    	$("#exchange").text(exchange);
    });
    $("#auto_back_btn").click(function(){//Return to Auto scouting
    	$("#auto").toggleClass("display");
    	$("#teleop").toggleClass("display");
    });
    $("#endgame_btn").click(function(){//Go on to End Game scouting
    	if(switch_personal >= 0 && switch_other >= 0 && scale >= 0 && exchange >= 0){
    		$("#teleop").toggleClass("display");
    		$("#endgame").toggleClass("display");
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
    
    //Endgame scouting scripts
    $("#endgame_sel .btn").click(function(){//Save ending position
    	endgame = $(this).attr("name");
    });
    $("#result_sel .btn").click(function(){//Save game result
    	result = $(this).attr("name");
    });
    $("#comments").change(function(){//Save scouter's comments
    	comments = $("#comments").val();
    });
    $("#teleop_back_btn").click(function(){//Return to Tele-Op scouting
    	$("#teleop").toggleClass("display");
    	$("#endgame").toggleClass("display");
    });
    $("#submit_btn").click(function(){//Submit data into AJAX request
    	if(endgame !== "" && result !== "" && comments !== ""){
    		submitData();
    		alert("Scouting data has enetered database!");
    		
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
});