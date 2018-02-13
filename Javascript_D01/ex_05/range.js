function range(start, end, step){

	if(arguments.length == 1){
		end = start;
		start = 0;
	}

	end = end || 0;
	step = step || 1;

	for(var ret = []; (((end + 1)- start) * step) > 0; start += step){
		ret.push(start);
	}
	return ret;

	if(start > end && step < 0){

		for(var ret = []; (start - (end + 1)) * step > 0; start -= step){
			ret.push(start);
		}
		return ret;
	}
}

console.log(range(1, 10, 2));
console.log(range(19, 22));
console.log(range(5, 2, -1));