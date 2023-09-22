<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Khởi tạo biến lưu chuỗi lớn nhất và nhỏ nhất
$maxLengthString = "";
$minLengthString = "";

foreach ($array as $string) {
    // Kiểm tra độ dài của chuỗi
    $length = strlen($string);
    
    // Nếu độ dài của chuỗi lớn hơn chuỗi lớn nhất hiện tại, cập nhật chuỗi lớn nhất
    if ($length > strlen($maxLengthString)) {
        $maxLengthString = $string;
    }
    
    // Nếu độ dài của chuỗi nhỏ hơn chuỗi nhỏ nhất hiện tại hoặc chưa có chuỗi nhỏ nhất, cập nhật chuỗi nhỏ nhất
    if ($length < strlen($minLengthString) || empty($minLengthString)) {
        $minLengthString = $string;
    }
}

// In ra kết quả
echo "Chuỗi lớn nhất là $maxLengthString, độ dài = " . strlen($maxLengthString) . "<br>";
echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = " . strlen($minLengthString) . "<br>";

?>