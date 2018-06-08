$(document).ready(function(){
    $(".switch").click(function(){
    	$("#signup").toggleClass("display");
    	$("#login").toggleClass("display");
	});
    $("#dropdown").click(function(){
		$("#personal").toggleClass("display").toggleClass("inline-block");
    });
    $(".btn").click(function(){
        $(this).css("opacity", 1);
    });
    $("#match_num").change(function(){
    	$("#match_nm").text("Match Number: " + $("#match_num").val());
    });
    $("#team_num").change(function(){
    	$("#team_nm").text("Team Number: " + $("#team_num").val());
    });
});

