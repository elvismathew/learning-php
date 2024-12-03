<?php

$record_temp = " 78, 60, 62, 68, 71, 68, 73, 85, 66, 
64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62,
 62, 65, 64, 68, 73, 75, 79, 73";

 //breaks a string into an array
$temp_arr = explode(",", "$record_temp");
 
 $temp_count  = count($temp_arr); //obtain the temp count

$tot_temp = 0;

foreach($temp_arr as $temp){
    $tot_temp += $temp;
}

//calculate average temperature
$avg_temp = $tot_temp/$temp_count;

echo "Average temperature is: ". $avg_temp;

//sort temperature array in ascending order
sort($temp_arr);

//the lowest temperature
for($i=0; $i<5; $i++){
  
}
echo "The list of the five lowest temperature is: " .  $temp_arr[$i] . ",";

//the highest temperature
for($i = ($temp_count - 5); $i < $temp_count; $i++ ){
   
}
echo "The list of five highest temperature is:" . $temp_arr[$i] . ",";