<?php

$Color = array('A' => 'Blue', 'B' => 'Green', 
'C' => 'Red');

function lower($c){
    return strtolower($c);
}

print_r(array_map("lower", $Color));

function upper($c){
    return strtoupper($c);
}

print_r(array_map("upper", $Color));