<?php

const ERROR_LOG_FILE = "db_error log";

function connect_db($host, $username, $passwd, $port, $db){
	$conexion = mysqli_connect($host, $username, $passwd, $db, $port);

	if(mysqli_connect_errno()){
		echo "PDO ERROR: " . mysqli_connect_error . " storage in " . ERROR_LOG_FILE . "\n";
		file_put_contents(ERROR_LOG_FILE, mysqli_connect_error() . "\n", FILE_APPEND);
	}

	return $conexion;
}

?>