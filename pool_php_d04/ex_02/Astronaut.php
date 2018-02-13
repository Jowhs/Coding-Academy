<?php

class Astronaut {

    public $name;
    public $snacks;
    private $destination;
    private $id;
    private static $count = 0;
  
    
    function __construct($name){
        $this->name = $name;
        $this->snacks = 0;
        $this->destination = null;
        echo $this->name . " ready for launch !\n";
        $this->id = self::$count;
        self::$count++;

    }

    function getDestination(){
        return $this->destination;
    }

    function getId(){
        return $this->id;
    }
}

?>