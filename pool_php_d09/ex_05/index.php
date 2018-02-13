<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_GET["name"]) && !isset($_COOKIE["name"])){
	echo "Hello Platypus";
}else if(!isset($_GET["name"]) && isset($_COOKIE["name"])){
	echo "Hello " . $_COOKIE["name"];
}else{
	setcookie("name", $_GET["name"], time() + 600);
	echo "Hello " . $_GET["name"];
}

?>