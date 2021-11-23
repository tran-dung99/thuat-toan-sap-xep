<?php

function selectionSort($arr) {
    for($i = 0; $i < count($arr) - 1; $i ++) {
        $min = $i;
        for($j = $i + 1; $j < count($arr); $j++) {
            if($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr = sortArray($arr,$i,$min);
    }
    return $arr;
}

function sortArray($arr,$index,$valueMin) {
    $temp = $arr[$index];
    $arr[$index] = $arr[$valueMin];
    $arr[$valueMin] = $temp;
    return $arr;
}
 $number =  [1, 9, 4.5, 6.6, 5.7, -4.5];
print_r(selectionSort($number));
