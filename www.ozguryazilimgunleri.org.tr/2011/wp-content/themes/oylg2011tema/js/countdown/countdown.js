$(document).ready(
	function(){
		var cddate = new Date(); 
		cddate = new Date(2011,4-1,1,10,0,0); 
		$('#countdown').countdown({until: cddate});
		
		$("#countdown").delay(2000).fadeOut("slow",function(){
			$("#realdate").fadeIn("slow");
		});
	}
);

function displayCountdown(){
	$("#realdate").fadeOut("slow",function(){
		$("#countdown").fadeIn("slow",function(){
			$("#countdown").delay(2000).fadeOut("slow",function(){
				$("#realdate").fadeIn("slow");
			});
		});
	});
}