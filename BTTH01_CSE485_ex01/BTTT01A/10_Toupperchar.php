<?php
    function chuyenKieuChuHoa($arr) {
        foreach ($arr as &$item) {
            if (is_string($item)) {
                $item = strtoupper($item);
            }
        }
        return $arr;
    }

    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'B', 'C', 'E'];
    $arr3 = ['a', 0, null, false];
    
    $ketQua1 = chuyenKieuChuHoa($arr1);
    $ketQua2 = chuyenKieuChuHoa($arr2);
    $ketQua3 = chuyenKieuChuHoa($arr3);
    

    echo "Kết quả mảng 1: ";
    echo "<pre>".print_r($ketQua1, true)."</pre>";
    
    echo "Kết quả mảng 2: ";
    echo "<pre>".print_r($ketQua2, true)."</pre>";
    
    echo "Kết quả mảng 3: ";
    echo "<pre>".print_r($ketQua3, true)."</pre>";    
?>
<br>
