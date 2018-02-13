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

$a1 = new Animal("bob", 4, Animal::MAMMAL);
$a2 = new Animal("nemo", 0, Animal::MAMMAL);
$a3 = new Animal("ocell", 2, Animal::BIRD);

echo "The total number of animals is " . $a1->getNumberOfAnimalsAlive() . "\n";
echo "The total number of mammals is " . $a1->getNumberOfMammals() . "\n";
echo "The total number of fishes is " . $a1->getNumberOfFishes() . "\n";
echo "The total number of birds is " . $a1->getNumberOfBirds() . "\n";

?>
