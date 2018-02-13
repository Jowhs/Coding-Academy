const fs = require("fs");


if(!fs.existsSync("garbage")){
    fs.mkdirSync("garbage");
}

var i = 1;

while(i <= process.argv[2]){

	try{
		fs.writeFileSync("garbage/" + i, "");
		console.log("Created file " + i);
	}catch(e){
		console.log("Error. Critical failure.");
	}

	i++;
	
};

console.log("Done");

