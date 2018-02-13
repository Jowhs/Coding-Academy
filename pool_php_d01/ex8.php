<?php

function print_array($my_array){
    foreach($my_array as $key => $value){
        echo $key . "-" . $value;
    }
}


print_array(["Hello", "World",  "PHP"]);
?>