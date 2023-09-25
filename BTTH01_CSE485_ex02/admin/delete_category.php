<?php
    if(isset($_GET['ma_tloai'])){
        $maTheLoai = $_GET['ma_tloai'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM theloai WHERE ma_tloai = '$maTheLoai'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
//          echo "Deleted $rowCount row(s).";
            header("Location: category.php?success=$maTheLoai");
        }

    }catch(PDOException $e){
        echo "Kết nối thất bại: " . $e->getMessage();
    }
}
?>