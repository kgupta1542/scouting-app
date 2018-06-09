$(document).ready(function(){
	var match_number;
	var team_number;
	var alliance = "";
	var start_pos = "";
	
    $(".switch").click(function(){
    	$("#signup").toggleClass("display");
    	$("#login").toggleClass("display");
	});
    $("#dropdown").click(function(){
		$("#personal").toggleClass("display").toggleClass("inline-block");
    });
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
});

