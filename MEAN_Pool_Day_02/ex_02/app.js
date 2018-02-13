var express = require('express');
var path = require('path');

var start = function(port){
	var app = express();

	app.use("/", express.static("/", {fallthrough: false}));

	app.get('/', function(req, res){
		res.sendFile(path.join(__dirname, '/index.html'));
	});

	app.get('/index', function(req, res){
		res.sendFile(path.join(__dirname, '/index.html'));
	});

	app.get('/image', function(req, res){
		res.sendFile(path.join(__dirname, '/image.html'));
	});

	app.get('/form', function(req, res){
		res.sendFile(path.join(__dirname, '/form.html'));
	});

	app.listen(port);

	console.log("Listening on port... " + port);
}		
	
exports.start = start;