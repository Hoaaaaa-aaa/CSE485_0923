<?php
$array1 = [[77, 87],[23, 45]];
$array2 = ['giá trị 1', 'giá trị 2'];

$result = [];

foreach ($array1 as $key => $subArray) {
    $result[] = array_merge([$array2[$key]], $subArray);
}
//array_merge để ghép phần tử từ $array2 vào mỗi mảng con trong $array1
echo "<pre>".print_r($result, true)."</pre>";
?>