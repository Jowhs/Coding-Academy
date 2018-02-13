<?php

include_once("IUnit.php");

abstract class AMonster implements IUnit {

	private $name;
	private $hp;
	private $ap;
	private $damage;
	private $apcost;
	private $melee = false;

	function __construct($name){	
		$this->name = $name;
		$this->hp = 0;
		$this->ap = 0;
		$this->damage = 0;
		$this->apcost = 0;
	}

	function getName(){
		return $this->name;
	}

	function getHp(){
		return $this->hp;
	}

	function getAp(){
		return $this->ap;
	}

	function getDamage(){
		return $this->damage;
	}

	function equip(){
		echo "Monsters are proud and fight with their own bodies.";
	}

	function attack($param){
		if($param instanceof IUnit == false){
			throw new Exception("Error in AMonster. Parameter is not an IUnit.");
		}
	}

	function receiveDamage($param){
		if(is_numeric($param){
			$this->hp - $param;
		}
	}

	function moveCloseTo($param){
		if($param instanceof IUnit == false){
			throw new Exception("Error in AMonster. Parameter is not an IUnit.");
	}



}


?>






