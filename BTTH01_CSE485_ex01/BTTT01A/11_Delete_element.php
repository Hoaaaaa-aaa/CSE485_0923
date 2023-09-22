<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3 (key 2)
unset($array[2]);

// Đảm bảo key của mảng là tuần tự
$array = array_values($array);

echo "<pre>".print_r($array, true)."</pre>";
?>