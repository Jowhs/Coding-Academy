<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!isset($_GET["name"]) && !isset($_SESSION["name"])){
	echo "Hello Platypus";
}else if(!isset($_GET["name"]) && isset($_SESSION["name"])){
	echo "Hello " . $_SESSION["name"];
}else{
	$_SESSION["name"] = $_GET["name"];
	echo "Hello " . $_GET["name"];
}

?>