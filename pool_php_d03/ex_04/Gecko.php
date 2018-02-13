<?php

class Gecko
{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    
    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function status(){
        switch($this->age){
        case 0:
            echo "Unborn Gecko\n";
            break;
        case $this->age == 1 || $this->age == 2:
            echo "Baby Gecko\n";
            break;
        case $this->age >= 3 && $this->age <= 10:
            echo "Adult Gecko\n";
            break;
        case $this->age >= 11 && $this->age <= 13:
            echo "Old Gecko\n";
            break;
        default:
            echo "Impossible Gecko\n";
        }
    }
}

$thomas = new Gecko("Thomas", 23);
$thomas->setAge(6);
$thomas->status();


?>