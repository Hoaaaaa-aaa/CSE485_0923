<?php
    if(isset($_GET['id'])){
        $maTacGia = $_GET['id'];

    try{
        //Buoc 1: Ket noi DBServer
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");
        //Buoc 2: Thuc hien truy van
        $sql = "DELETE FROM tacgia WHERE ma_tgia = '$maTacGia'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Buoc 3: Xử lý kết quả
        $rowCount = $stmt->rowCount();
        if($rowCount>0){
//          echo "Deleted $rowCount row(s).";
            header("Location:author.php?success=$maTacGia");
        }

    }catch(PDOException $e){
        echo "Kết nối thất bại: " . $e->getMessage();
    }
}
?>