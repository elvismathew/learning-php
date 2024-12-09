<?php
//for the higher stars
for($x=0; $x<=5; $x++){//controls rows
    for($y=0; $y<=$x; $y++){//controls columns
        echo "*";
    }
    echo "</br>";
}
//for the lower stars
for($t=5; $t>= 1; $t--){
    for($r=1; $r<=$t; $r++){
        echo "*";
    }
    echo "</br>";
}