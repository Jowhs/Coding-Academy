<?php

function my_create_map(...$array){
    $arr = array();
    foreach($array as $key => $value){

        if(isset($value[0]) && isset($value[1])){
            $arr[$value[0]] = $value[1];
        }

        else{
            echo "The given argument aren't valid";
        }
    }
    return $arr;
}

?>