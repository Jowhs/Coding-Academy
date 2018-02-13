<?php

namespace chocolate;

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

namespace planet;

class Mars {

    private static $count = 0;
    private $id;
    private $size;
    
    function __construct(){
        $this->id = self::$count;
        self::$count++;
        $this->size = 10000;
    }

    function getId(){
        return $this->id;
    }

    function getSize(){
        return $this->size;
    }

    function setSize($size){
        $this->size;
    }
}

/*$user1 = new \chocolate\Mars();
$user2 = new \chocolate\Mars();
$user3 = new \chocolate\Mars();
echo $user1->getId() . "\n";
echo $user2->getId() . "\n";
echo $user3->getId() . "\n";

echo "---------------------\n";
*/

$user4 = new \planet\Mars();
/*$user5 = new \planet\Mars();
$user6 = new \planet\Mars();
echo $user4->getId() . "\n";
echo $user5->getId() . "\n";
echo $user6->getSize() . "\n";
*/
?>