function drawTriangle(num){
	for(i = 1; i <= num; i++){
		for(j = 0; j < i; j++){
			process.stdout.write("$");
		}
		process.stdout.write("\n");
	}
}

drawTriangle(6);