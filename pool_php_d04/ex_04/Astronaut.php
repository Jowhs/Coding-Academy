<?php

include_once("Mars.php");

class Astronaut {

    public $name;
    private $snacks;
    private $destination;
    private $id;
    private static $count = 0;
  
    
    function __construct($name){
        $this->name = $name;
        $this->snacks = 0;
        $this->destination = NULL;
        echo $this->name . " ready for launch !\n";
        self::$count++;               
        $this->id = self::$count;
    }

    function __destruct(){
        if($this->destination == NULL){
            echo $this->name . ": Mission aborted! \n";
        } else
            echo  $this->name . ": I may have done nothing, but I have " . $this->snacks . " Mars to eat at least \n";
        }
        

    function getDestination(){
        return $this->destination;
    }

    function setDestination($dest){
        $this->destination = $dest;
    }
    
    function getId(){
        return $this->id;
    }

    function getSnacks(){
        echo $this->name . " tiene " . $this->snacks . " snacks \n";
    }


    function doActions($nombre = ""){
        if(get_class($nombre) == "planet\Mars"){
            echo $this->name . ": started a mission! \n";
        } else if(get_class($nombre) == "chocolate\Mars"){            
            echo $this->name . ": is eating mars number " . $this->id . "\n";
            $this->snacks++;
        } else {
            echo "Nothing to do. \n";
        }
    }
}

$planet = new planet\Mars();
$choco = new chocolate\Mars();
$gecko = new Astronaut("Pedro");
$nuevo = new Astronaut("Luis");
$gecko->doActions($planet);
$gecko->doActions($choco);
$nuevo->doActions($planet);
$nuevo->doActions($choco);
$nuevo->doActions($choco);
$nuevo->doActions($choco);
$nuevo->setDestination("Jupiter");
$gecko->setDestination("Saturno");
$gecko->getSnacks();
$nuevo->getSnacks();
?>