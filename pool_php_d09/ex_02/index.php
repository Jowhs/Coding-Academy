<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET["name"])){
	echo "Hello " . $_GET["name"];
}else{
	echo "Hello Platypus";
}

?>