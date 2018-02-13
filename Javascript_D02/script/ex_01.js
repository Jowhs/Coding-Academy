var hello = function(){
	var x = document.getElementsByTagName("footer");
	x[0].innerHTML = "<div>Hello World!</div>";
	console.log(x);
};

hello();