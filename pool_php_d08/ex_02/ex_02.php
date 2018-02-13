<?php

function my_password_hash($pass){
	$salt = uniqid(mt_rand(), true);
	$hash = md5($salt . $pass);
	$arr = array();
	$arr["hash"] = $hash;
	$arr["salt"] = $salt;
	return $arr;
}

print_r(my_password_hash("forçabarça"));

function my_password_verify($pass, $salt, $hash){
	$ver_hash = md5($salt . $pass);
	if($ver_hash == $hash){
		return true;
	} else{
		return false;
	}
}

?>