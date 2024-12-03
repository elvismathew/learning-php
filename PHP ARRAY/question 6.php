<?php

function term($value, $key){
    echo "$key : $value" . "</br>";
}

$a = 
'{"Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": 
    {
    "Publisher": "Little Brown"
    }
}';

$j1 = json_decode("$a",true );

array_walk_recursive($j1, "term");