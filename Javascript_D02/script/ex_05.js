var buttons = document.getElementsByTagName("button");

var bkg = document.getElementsByTagName("select")[0];

var buttonplus = buttons[0];
var buttonminus = buttons[1];

bkg.addEventListener("change", function(event){
	document.body.style.backgroundColor = event.target.value;
});

buttonplus.addEventListener("click", function(){
	if(document.body.style.fontSize == ""){
		document.body.style.fontSize = "16px";
	}
	document.body.style.fontSize = (parseFloat(document.body.style.fontSize) + 0.5) + "px";
});

buttonminus.addEventListener("click", function(){
	if(document.body.style.fontSize == ""){
		document.body.style.fontSize = "16px";
	}
	document.body.style.fontSize = (parseFloat(document.body.style.fontSize) - 0.5) + "px";
});
