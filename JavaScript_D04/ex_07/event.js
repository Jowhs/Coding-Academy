$(document).ready(

	function(){
	
		$("p").on("mouseover", function (){
		
			$(this).css("background-color", "#bdbdbd");
		});

		$("p").on("mouseout", function(){
		
			$(this).css("background-color", "white");
		});

		$("p").on("click", function(){
		
			$(this).hide();
		});
	});







