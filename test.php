<?php

$str = '1,3,5,7,9';

echo "\nplease, enter your line of number\n";

$line = trim(fgets(STDIN));
if($line) {
  $str = $line; 
}

echo "\nyour line is $str \n";


function IsProgression($str) {

    $data = explode(',', $str);

    $cnt = count($data);
    if($cnt <= 1) { 
        return false; 
    }
    $sum = array_sum($data); 

    $sum_progression =  ( ( $data[0] + $data[$cnt-1] ) / 2 ) * $cnt;

    if ($sum_progression === $sum) {
        return true;
    }

    return false;
}

echo IsProgression($str) === true ? 'YES' : 'NO';



?>


