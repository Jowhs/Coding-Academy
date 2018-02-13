<?php

function connect_db(){
	$enlace = mysqli_connect("localhost", "root", "mierdasql", "AJAX", 3306);

	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	return $enlace;
}

$sql = "SELECT * FROM todo";

$conn = connect_db();

$result = $conn->query($sql);

$arr = array();

foreach($result as $row){
	$arr[] = $row;
//	echo json_encode($row) . "<br><br>";
}

echo json_encode($arr);
?>