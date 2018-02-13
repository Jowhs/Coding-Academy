<?php

include_once("AWeapon.php");

class PlasmaRifle extends AWeapon {

	function attack(){
		echo "- Name: " . $this->getName() . "\n";
		echo "- Damage: " . $this->getDamage() . "\n";
		echo "- AP Cost: " . $this->getApcost() . "\n";
		echo "- Output of attack(): PIOU \n";
		echo "- Not melee \n";
	}

}

$pr = new PlasmaRifle("Plasma Rifle", 5, 21);
$pr->attack();

?>