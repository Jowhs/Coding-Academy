<?php

abstract class AWeapon {
	
	private $name;
	private $apcost;
	private $damage;
	private $melee = false;

	function __construct($name, $apcost, $damage){
		$this->name = $name;
		$this->apcost = $apcost;
		$this->damage = $damage;
		if(!is_string($name) || !is_numeric($apcost) || !is_numeric($damage)){
			echo "Error \n";
		}
	}

	function getName(){
		return $this->name;
	}

	function getApcost(){
		return $this->apcost;
	}

	function getDamage(){
		return $this->damage;
	}

	abstract function attack();

}

class NewWeapon extends AWeapon{

	function attack(){
		echo "ATTACK! \n";
	}

}

?>