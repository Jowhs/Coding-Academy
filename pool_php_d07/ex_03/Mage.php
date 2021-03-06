<?php

include_once("Character.php");

class Mage extends Character {

	function __construct($name){
		$this->name = $name;
		$this->life = 70;
		$this->agility = 10;
		$this->strength = 7;
		$this->wit = 10;
		echo $name . ": May the gods be with me. \n";
		}

	function __destruct(){
		echo $this->getName() . ": By the four gods, I passed away... \n";
	}

	function attack(){
			echo $this->getName() . ": Feel the power of my magic! \n";
		}

}
?>