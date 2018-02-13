<?php

class Mars {

    private static $count = 0;
    private $id;
    
    function __construct(){
        $this->id = self::$count;
        self::$count++;
    }

    function getId(){
        return $this->id;
    }    
}

?>