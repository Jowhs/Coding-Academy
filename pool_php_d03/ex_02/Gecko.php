<?php

class Gecko
{
    public $name;
    public function __construct($name = "") {
        $this->name = $name;
        echo "Hello " . $name . "!\n";
    }
}

?>