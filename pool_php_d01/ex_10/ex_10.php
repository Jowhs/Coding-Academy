<?php

function my_get_args(...$nargs){
    foreach($nargs as $langs){
        echo $langs . " ";
    }
}

?>