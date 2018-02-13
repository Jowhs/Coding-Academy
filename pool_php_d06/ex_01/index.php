<?php

include_once("AWeapon.php");

$arma = new NewWeapon("BAZOOKA", 10, 100);
$arma->attack();
echo $arma->getName() . "\n";
echo $arma->getApcost() . "\n";
echo $arma->getDamage() . "\n";


?>