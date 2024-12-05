<?php
$numb = range(11,20);

shuffle ($numb);

for ($x=0; $x <10; $x++){
    echo $numb [$x] . " ";
}

echo "</br>";