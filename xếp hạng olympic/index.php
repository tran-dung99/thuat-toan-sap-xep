<?php

include_once "Country.php";

function sortMedals($list)
{
    for ($i = 0; $i < count($list) - 1; $i++) {
       $max = $i;
       for($j = $i + 1; $j < count($list); $j++){
           if($list[$j]->getTotalGoldMedals() > $list[$max]->getTotalGoldMedals()) {
               $max = $j;
           }
       }
       $list = sortArray($list, $i,$max);
    }
    return $list;
}

function sortArray($arr,$index,$max) {
    $temp = $arr[$index];
    $arr[$index] = $arr[$max];
    $arr[$max] = $temp;
    return $arr;
}
$vietNam = new Country("Viet Nam", 5);
$hanQuoc = new Country("han quoc", 3);
$nhatBan = new Country("nhat ban", 4);
$my = new Country("America", 7);

$array = [$vietNam,$hanQuoc,$nhatBan,$my];
//for ($i = 0; $i < count($arr); $i++) {
//    print_r($arr[1]->getTotalGoldMedals());
//}

echo "<pre>";
print_r(sortMedals($array));