<?php
$array1 = [[77, 87],[23, 45]];
$array2 = ['giá trị 1', 'giá trị 2'];

// Tách mảng 1 thành 2 mảng con
$array11 = $array1[0];
$array12 = $array1[1];


$result = [];

foreach ($array2 as $key => $value) {
    $result[] = [$value] + $array11[$key];
}
echo "<pre>".print_r($result, true)."</pre>";
?>