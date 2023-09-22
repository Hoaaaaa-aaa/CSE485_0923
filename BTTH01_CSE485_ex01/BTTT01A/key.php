<?php
$a = ['a' => ['b' => 0,'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3]]];

// Lấy giá trị = 3 có key là 'b'
$value1 = $a['b']['o']['b'];

// Lấy giá trị = 1 có key là 'c'
$value2 = $a['a']['c'];

// Lấy thông tin của phần tử có key 'a'
$elementA = $a['a'];

echo "Giá trị có key 'b' là: " . $value1 . "<br>";
echo "Giá trị có key 'c' là: " . $value2 . "<br>";
echo "Thông tin của phần tử có key 'a':<pre>" . print_r($elementA, true) . "</pre>";
// print_r: in ra nội dung của một biến mảng hoặc đối tượng dưới dạng chuỗi.
// true: trả về chuỗi chứa thông tin mảng thay vì in nó ra màn hình.
// pre: hiển thị văn bản theo kiểu giữ nguyên khoảng cách và xuống dòng.
?>
