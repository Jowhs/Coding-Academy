<?php

$new_array = array("PHP", "HTML", "Javascript", "SQL");

function print_array($my_array){
    foreach($my_array as $codes){
        echo $codes . "\n";
    }
}

print_array($new_array);

?>