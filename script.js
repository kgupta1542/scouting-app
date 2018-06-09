$(document).ready(function(){
	//Define all variables so that they are global
	var match_number;
	var team_number;
	var alliance = "";
	var start_pos = "";
	var baseline = "";
	var switch_auto = 0;
	var scale_auto = 0;

	//General scripts
    $(".switch").click(function(){
    	$("#signup").toggleClass("display");
    	$("#login").toggleClass("display");
	});
    $("#dropdown").click(function(){
		$("#personal").toggleClass("display").toggleClass("inline-block");
    });
    
    //Pre-game scouting scripts
    $("#match_num").change(function(){
    	match_number = $("#match_num").val();
    	$("#match_nm").text(match_number);
    });
    $("#team_num").change(function(){
    	team_number = $("#team_num").val();
    	$("#team_nm").text(team_number);
    });
    $(".btn_group .btn").click(function(){
        $(this).siblings().addClass("light"); 
        $(this).removeClass("light");
    });
    $("#alliance_sel .btn").click(function(){
    	alliance = $(this).attr("name");
    	$("#alliance").text(alliance);
    });
    $("#start_pos .btn").click(function(){
    	start_pos = $(this).attr("name");
    });
    $("#auto_btn").click(function(){
    	if(match_number > 0 && team_number > 0 && alliance !== "" && start_pos !== ""){
    		$("#pre_game").toggleClass("display");
    		$("#auto").toggleClass("display");
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
    
    //Auto scouting scripts
    $("#baseline_sel .btn").click(function(){
    	baseline = $(this).attr("name");
    })
    $("#switch_auto_sel .btn").click(function(){
    	if($(this).attr("name") == "plus"){
    		switch_auto = switch_auto + 1;
    	}
    	else{
    		switch_auto = switch_auto - 1;
    	}
    	
    	$("#switch_auto").text(switch_auto);
    });
    $("#scale_auto_sel .btn").click(function(){
    	if($(this).attr("name") == "plus"){
    		scale_auto = scale_auto + 1;
    	}
    	else{
    		scale_auto = scale_auto - 1;
    	}
    	
    	$("#scale_auto").text(scale_auto);
    });
    $("#teleop_btn").click(function(){
    	if(baseline !== "" && switch_auto >= 0 && scale_auto >= 0){
    		$("#auto").toggleClass("display");
    		$("#teleop").toggleClass("display");
    	}
    	else{
    		alert("Please fill in all information before moving on!");
    	}
    });
    
    //Teleop scouting scripts
});

