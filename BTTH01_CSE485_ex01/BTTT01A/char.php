<?php
    function chuyenKieuChuThuong($arr) {
        foreach ($arr as &$item) {
            if (is_string($item)) {
                $item = strtolower($item);
            }
        }
        return $arr;
    }
    
    $arr1 = ['a', 'b', 'ABC'];
    $arr2 = ['1', 'B', 'C', 'E'];
    $arr3 = ['a', 0, null, false];
    
    $ketQua1 = chuyenKieuChuThuong($arr1);
    $ketQua2 = chuyenKieuChuThuong($arr2);
    $ketQua3 = chuyenKieuChuThuong($arr3);
    
    // foreach($ketQua1 as $key => $values){
    //     $kq1 = $ketQua1($values);

    // }

    echo "Kết quả mảng 1: ";
    print_r($ketQua1);
    
    echo "Kết quả mảng 2: ";
    echo "<pre>".print_r($ketQua2, true)."</pre>";
    
    echo "Kết quả mảng 3: ";
    echo "<pre>".print_r($ketQua3, true)."</pre>";    
?>