var tag = document.getElementsByTagName("footer")[0].firstElementChild;

tag.onclick = function(){

	var name = "";

	while(name == null || name == ""){
		name = prompt("What's your name?");
	}

	if(name != null && name != ""){

		var check = prompt("Are you sure your name is " + name + "?");

		if(check == null){
			return false;
		}else{
			tag.innerHTML = "Hello " + name.charAt(0).toUpperCase() + name.slice(1) + "!";	
		}
	}
}