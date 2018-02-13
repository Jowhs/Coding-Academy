<?php

$a = 10;
$b = 20;

function my_swap(&$a, &$b){
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

my_swap($a, $b);
echo $a . " <-> " . $b;

?>