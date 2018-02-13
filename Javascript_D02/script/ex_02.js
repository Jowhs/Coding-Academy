
var tag = document.getElementsByTagName("footer")[0].firstElementChild;

tag.innerHTML = 0;

var contador = 0
tag.onclick = function(){
	tag.innerHTML = ++contador;
}