<?php

session_start();

if(isset($_SESSION['data'])){
	unset($_SESSION['data']);
	header("location:login.php");
}

?>