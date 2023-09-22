<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// Lấy ra phần tử đầu tiên và phần tử cuối cùng
$firstElement = reset($numbers);
$lastElement = end($numbers);

// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị
$maxValue = max($numbers);
$minValue = min($numbers);
$totalSum = array_sum($numbers);

// In kết quả
echo "Phần tử đầu tiên: " . $firstElement . "<br>";
echo "Phần tử cuối cùng: " . $lastElement . "<br>";
echo "Số lớn nhất: " . $maxValue . "<br>";
echo "Số nhỏ nhất: " . $minValue . "<br>";
echo "Tổng các giá trị: " . $totalSum . "<br>";

// Sắp xếp mảng theo chiều tăng giá trị
asort($numbers);
echo "Mảng tăng giá trị: <pre>".print_r($numbers, true)."</pre>";

// Sắp xếp mảng theo chiều giảm giá trị
arsort($numbers);
echo "Mảng giảm giá trị: <pre>".print_r($numbers, true)."</pre>";

// Sắp xếp mảng theo chiều tăng key
ksort($numbers);
echo "Mảng tăng key: <pre>".print_r($numbers, true)."</pre>";

// Sắp xếp mảng theo chiều giảm key
krsort($numbers);
echo "Mảng giảm key: <pre>".print_r($numbers, true)."</pre>";
?>