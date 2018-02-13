<?php

function my_password_hash($passwd){
$salt = uniqid(mt_rand(), true);
$hash = md5($salt . $passwd);
$arr = array();
$arr["hash"] = $hash; 
$arr["salt"] = $salt;
return $arr;
}

print_r(my_password_hash("putoapache"));

function my_password_verify($passwd, $salt, $hash){
    $test = md5($salt . $passwd);
    if($test == $hash){
        return true;
    } else{
        return false;
    }
}

$arr = my_password_hash("putoapache");
echo(my_password_verify("putoapache", $arr["salt"], $arr["hash"]));

?>