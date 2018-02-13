<?php
  
  class Animal {
  
    const MAMMAL = "mammal";
    const FISH = "fish";
    const BIRD = "bird";

    private $name;
    private $legs;
    private $type;
    private static $total = 0;
    private static $mammals = 0;
    private static $fishes = 0;
    private static $birds = 0;
  
    function __construct($name, $legs, $type){
 		$this->name = $name;
 		$this->legs = $legs;
 		$this->type = $type;
        self::$total++;
        if($type == self::MAMMAL){
            self::$mammals++;    
        }
        else if($type == self::FISH){
            self::$fishes++;    
        }
        else{
            self::$birds++;
        }
    }

    static function getNumberOfAnimalsAlive(){
        return self::$total;
    }

    static function getNumberOfMammals(){
            return self::$mammals;
        }

    static function getNumberOfFishes(){
        return self::$fishes;
    }

    static function getNumberOfBirds(){
        return self::$birds;
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

class Cat extends Animal {

    private $color;

    function __construct($name, $color = "grey"){
        parent::__construct($name, 4, Animal::MAMMAL);
        $this->color = $color;
        echo "My name is " . $name . " and I am a " . $this->getType() . "!\n";
        echo $name . ": MEEEOOWWWWW \n";
    }

    function getColor(){
        $this->color;
    }

    function setColor($color){
        return $this->color;
    }

    function meow(){
        echo $this->getName() . " the " . $this->color . " kitty is meowing. \n";
    }

}


//$gato = new Cat("Bob");
//$gato->getColor();
//$gato->meow();

?>
