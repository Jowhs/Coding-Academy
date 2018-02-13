<?php

class Pony {

	private $gender;
	private $name;
	private $color;

	function __construct($gender, $name, $color){
		$this->gender = $gender;
		$this->name = $name;
		$this->color = $color;
	}

	function __destruct(){
		echo "I'm a dead pony. \n";
	}

	function __call($a, $b){
		echo "I' don't know what to do... \n";    
	}

	function echo(){
		echo "Don't worry, I'm a pony! \n";
	}

	function speak(){
		echo "Hiii hiii hiii \n";
	}

	function __set($attr, $value){
		if(property_exists("Pony", "$attr")){
			echo "It's not right to set a private attribute \n"; 
		} 

		else{
		echo "There is no attribute: " . $attr . ". \n";
		}	
	}

	function __get($attr){
		if(property_exists("Pony", "$attr")){
			echo "It's not right to get a private attribute \n"; 
		} 

		else{
		echo "There is no attribute: " . $attr . ". \n";
		}	
	}

}

?>

