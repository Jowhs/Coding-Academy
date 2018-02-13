<?php

function my_print_args($argv){
    unset($argv[0]);
    foreach($argv as $args){
        echo $args . "\n";
    }
    
}

my_print_args($argv);
?>