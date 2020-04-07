<?php

$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];
$arr3 = [];

foreach ($arr1 as $value) {
    array_push($arr3, $value);
}

foreach ($arr2 as $value) {
    array_push($arr3, $value);
}

foreach ($arr3 as $value) {
    echo $value;
}
