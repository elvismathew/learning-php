<?php



function factorial($y){
    $value = 1;
    for($x=1; $x<=$y; $x++){
        $value *= $x;
    }
    return $value;
}

$result = factorial(6);
echo $result;