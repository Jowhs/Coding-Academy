
var express = require('express');

var start = function(port){
	var app = express();

	app.get('/', function(req, res){
		res.send('Greetings Traveler!');
	});

	app.listen(port);

	console.log("Listening on port... " + port);
}

exports.start = start;

