<?php

const ERROR_LOG_FILE = "errors.log";

function connect_db($host, $username, $passwd, $port, $db){
	$conexion = mysqli_connect($host, $username, $passwd, $db, $port);

	if(mysqli_connect_errno()){
		echo "Error connection to DB \n";
		file_put_contents(ERROR_LOG_FILE, mysqli_connect_error() . "\n", FILE_APPEND);
	} else{
		echo "Connection to DB successfull";
	}
}

print_r($argv);

if(sizeof($argv) > 5) {
	connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
	
} else {
	echo "Bad params! \n";
}

?>