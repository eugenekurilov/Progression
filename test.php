<?php

$str = '1,3,5,7,9';

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


