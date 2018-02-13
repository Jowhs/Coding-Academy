<?php

include_once("AWeapon.php");

class PowerFirst extends AWeapon {

	function attack(){
		echo "- Name: " . $this->getName() . "\n";
		echo "- Damage: " . $this->getDamage() . "\n";
		echo "- AP Cost: " . $this->getApcost() . "\n";
		echo "- Output of attack(): SBAM \n";
		echo "- Melee \n";
	}

}

$pf = new PowerFirst("Power First", 8, 50);
$pf->attack();

?>