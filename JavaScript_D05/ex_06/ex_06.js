$(document).ready(function(){

	$("button").click(function(){

		var marker;
		$.ajax({

			url: "server.php",
			type: "GET",
			contentType: "application/json; charset=utf-8",
			success: function(e){
				marker = JSON.parse(e);
				$("#nombre").text(marker.name);
			}

		});

	})
	
});