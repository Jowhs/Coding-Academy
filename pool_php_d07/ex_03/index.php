<?php

include_once("Character.php");
include_once("Warrior.php");

$warrior = new Warrior("Jean-Luc");
$warrior->moveRight();
$warrior->moveLeft();
$warrior->moveUp();
$warrior->moveDown();

?>