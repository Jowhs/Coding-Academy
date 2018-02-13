<?php

include_once("Character.php");

class Warrior extends Character {

	function __construct($name){
		$this->name = $name;
		$this->life = 100;
		$this->agility = 10;
		$this->strength = 8;
		$this->wit = 3;
		echo $name . ": I'll engrave my name history! \n";
	}

	function __destruct(){
		echo $this->getName() . ": Aarrg I can't believe I'm dead...  \n";
	}

	function attack(){
		echo $this->getName() . ": I'll crush you with my hammer! \n";
	}

	function moveRight(){
		echo $this->getName() . ": moves right like a bad boy. \n";
	}

	function moveLeft(){
		echo $this->getName() . ": moves left like a bad boy. \n";
	}

	function moveUp(){
		echo $this->getName() . ": moves up like a bad boy. \n";
	}

	function moveDown(){
		echo $this->getName() . ": moves down like a bad boy. \n";
	}

}

?>