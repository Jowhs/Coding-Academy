<?php

class Gecko
{
    private $name;
    private $energy; //= 100; - Podemos inicializar la variable aquí
    
    public function __construct($name = ""){
        $this->name = $name;
        $this->energy = 100; // o bien la podemos inicializar aquí
    }

    public function __destruct(){
            echo "Bye " . $this->name . "!\n";
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getEnergy(){
        return $this->energy;
    }

    public function setEnergy($en){
        $this->energy = $en;
    }

    public function eat($food){
        $food = strtolower($food);
        if($food == "meat"){
            if($this->energy >= 0 && $this->energy <= 90){
                $this->energy += 10;
            }
            echo "Yummy!\n";
        } elseif($food == "vegetable"){
            if($this->energy >= 10 && $this->energy <= 100){
                $this->energy -= 10;
            }
            echo "Erk!\n";
        } else{
            echo "I can't eat this.\n";
        }
    }

    public function work(){
        if($this->energy >= 25){
            echo "I'm working T.T\n";
            $this->energy -= 9;
        } else{
            echo "Heyyy... I'm too sleepy, better take a nap!\n";
            $this->energy = 50;
        }
    }
}

$gecko = new Gecko("gecko");

for($i = 0; $i <= 4; $i++){
    $gecko->eat("Vegetable") . "\n";
    echo $gecko->getEnergy() . "\n";
}

$gecko->work();

echo $gecko->getEnergy() . "\n";

?>