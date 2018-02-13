document.addEventListener('keydown', function(event){
	
	var str = document.getElementsByTagName("footer")[0].firstElementChild;

	if(str.innerHTML.length > 42){
		str.innerHTML = str.innerHTML.substring(1);
	}
	str.innerHTML =str.innerHTML + event.key;

});
