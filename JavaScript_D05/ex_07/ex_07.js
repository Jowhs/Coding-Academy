$(document).ready(function(){

	$("button").click(function(){

		$.ajax({

			url: "server.php",
			type: "GET",
			contentType: "application/json; charset=utf-8",
			success: function(e){
				e = JSON.parse(e); //.parse convierte strings en objetos
				for(var i = 0; i < e.length; i++){
					$("#nombre").append("<li>" + e[i].id + " " + e[i].name + " " + e[i].status + "</li>")
				}

			}
		});
	});	
			
});