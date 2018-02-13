const fs = require("fs");

fs.stat(process.argv[2], (err, stats) => {
	if(err){
		console.log("This file doesn't exists.");
		throw err;
	}else{

		fs.copyFile(process.argv[2], process.argv[3], (err) => {

		if(err) throw err;

		console.log(process.argv[2] + " was copied to " + process.argv[3]);
		
		});
	}		
});