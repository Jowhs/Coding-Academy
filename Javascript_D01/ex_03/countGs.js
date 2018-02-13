function countGs(str){
	
	var count = 0;
	var upper = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";

	for(i = 0; i < upper.length; i++){
		for(j = 0; j < str.length; j++){
			if(upper[i] == str[j]){
				count++;
			}
		}
	}	
return count;
}