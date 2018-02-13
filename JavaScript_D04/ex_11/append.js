$(document).ready(
	
	function(){

		$("button").click(function(){

			var value = $("#listItem").val();
			$("button").after("<div>"+value+"</div>");
			$("#listItem").val("");
					
		});
				
	});




