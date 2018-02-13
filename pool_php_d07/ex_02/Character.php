<?php

class Character {

	protected $name;
	protected $life;
	protected $agility;
	protected $strength;
	protected $wit;
	const CLASSE = "Character";

	function __construct($name){
		$this->name = $name;
		$this->life = 50;
		$this->agility = 2;
		$this->strength = 2;
		$this->wit = 2;
	}

	function getName(){
		return $this->name;
	}

	function getLife(){
		return $this->life;
	}

	function getAgility(){
		return $this->agility;
	}

	function getStrength(){
		return $this->strength;
	}

	function getWit(){
		return $this->wit;
	}

	function getClasse(){
		return self::CLASSE;
	}
}

?>