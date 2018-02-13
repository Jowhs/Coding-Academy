<?php
  
  class Animal {
  
    const MAMMAL = "mammal";
    const FISH = "fish";
    const BIRD = "bird";

    private $name;
    private $legs;
    private $type;
  
    function __construct($name, $legs, $type){
 		$this->name = $name;
 		$this->legs = $legs;
 		$this->type = $type;
 		echo "My name is " . $this->name . " and I am a " . $this->type . "! \n";
	
    }
 
 	function getName(){
 		return $this->name;
 	}

 	function getLegs(){
 		return $this->legs;
 	}

 	function getType(){
 		return $this->type;
 	}

 }


 
?>
