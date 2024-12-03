<?php

$name = array("Sophia"=>"31",
"Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($name);
echo "Associative array: Ascending order sort by value" ."</br>";

foreach ($name as $x => $y){
    echo "$x => $y". "</br>";
}

echo "</br>";

echo "Ascending order sort by key" ."</br>";

ksort($name);
foreach ($name as $k => $w){
    echo "$k => $w". "</br>";
}

echo "</br>";

echo "Descending order sort by value" . "</br>";

arsort($name);

foreach ($name as $u => $e){
    echo "$u => $e". "</br>";
}

echo "</br>";

echo "Descending order sort by key" . "</br>";

krsort($name);

foreach ($name as $y => $a){
    echo "$y => $a". "</br>";
}
