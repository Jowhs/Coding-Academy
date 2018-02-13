<?php

include_once("Character.php");
include_once("Warrior.php");
include_once("Mage.php");

$mage = new Mage("Robert");
$mage->unsheathe();

$warrior = new Warrior("Jean-Luc");
$warrior->unsheathe();

?>