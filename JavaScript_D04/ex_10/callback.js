$(document).ready(
	function(){
		$(".test").on("mouseover", (function(){
			$(this).hide("slow", function(){
				alert("The paragraph now is hidden...");
			});				
	}));
});




