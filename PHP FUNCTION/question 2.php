<?php

function is_prime($n){
    for($x=2; $x< $n; $x++){
        if ($n% $x == 0){
            return 0;
        }

    }

    return 1;
}

$a = is_prime(3);

if ($a == 0){
    echo "This is not a prime number";
}

else{
    echo "It is a prime number";
}