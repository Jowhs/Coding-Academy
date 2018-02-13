<?php

function connect_db(){
	$enlace = mysqli_connect("localhost", "root", "mierdasql", "pool_php_rush", 3306);

	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	return $enlace;
}