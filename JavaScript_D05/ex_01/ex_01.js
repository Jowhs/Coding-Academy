$(document).ready(
	function(){

		$("button").click(function(){
			var value = $("input").val();
			$(".lista").prepend("<li>" + value +"</li>");
			$("input").val("");
		});
				
	});