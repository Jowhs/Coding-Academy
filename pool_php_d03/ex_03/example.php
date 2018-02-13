<?php

include_once("Gecko.php");

$thomas = new Gecko("Thomas");
$annonymus = new Gecko();
$serguei = new Gecko("Serguei");

unset($serguei);
echo $thomas -> getName() . "\n";
echo $annonymus -> getName() . "\n";

?>