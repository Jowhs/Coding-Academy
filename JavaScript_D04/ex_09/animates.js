$(document).ready(
	function(){
		$("button").on("click", (function(){
			$(".platypus").animate({left: '150px', bottom: '200px'});
			$(".platypus").css("background-color", "green");
			
	}));
});




