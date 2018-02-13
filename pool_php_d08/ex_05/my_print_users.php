<?php

const ERROR_LOG_FILE = "errors.log";

function connect_db($host, $username, $passwd, $port, $db){
	$conexion = mysqli_connect($host, $username, $passwd, $db, $port);

	if(mysqli_connect_errno()){
		echo "Error connection to DB \n";
		file_put_contents(ERROR_LOG_FILE, mysqli_connect_error() . "\n", FILE_APPEND);
	} else{
		echo "Connection to DB successful \n";
	}
	return $conexion;
}

function my_print_users($bbdd){
	$has_result = "false";
	$tab = func_get_args();
	$size = sizeof($tab);
	$i = 1;
	while($i < $size){
		$sql = "SELECT name FROM users WHERE id = $tab[$i]";
		$result = $bbdd->query($sql);
		foreach($result as $row){
			$has_result = "true";
			echo $row['name'];
			echo "\n";
		}
		$i++;

	//return $has_result;
	}
}

if(sizeof($argv) > 5) {
	$db = connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);
	
	if($db && my_print_users($db, 1, 2, 3, 4)){
		return true; 
	}else {
		return false;
	}
}
else {
	echo "Bad params! \n";
	}
?>