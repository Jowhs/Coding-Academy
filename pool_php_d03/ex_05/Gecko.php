<?php

class Gecko
{
    public $name;
    
    public function __construct($name = ""){
        $this->name = $name;
        echo "Hello " . $name . "!\n";
    }

    public function __destruct(){
            echo "Bye " . $this->name . "!\n";
    }

    public function hello($string){
        if(is_numeric($string)){
            for($i = 0; $i < $string; $i++){
                echo "Hello, I'm " . $this->name . "!\n";
            }
        } else {
            echo "Hello " . $string . ", I'm " . $this->name . "!\n"; 
        }
        
    }
}

?>