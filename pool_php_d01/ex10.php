<?php

function my_get_args(...$var){
    foreach($var as $v){
        echo $v;
    }
}

my_get_args("PHP", "HTML", "CSS");