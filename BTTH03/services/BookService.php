<?php
require APP_ROOT.'/models/Book.php';
class BookService{
    public function getBook(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $sql = "SELECT * FROM sach";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch()){
            $book = new Book($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
            $data[] = $book;
        }
        return $data;
    }
    public function getAuthor(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $sql = "SELECT * FROM sach";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
        return $data;
    }
    public function AddBook(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $tensach = $_POST['tenSach'];
        $namXuatBan = $_POST['namXuatBan'];
        $idTacGia = $_POST['idTacGia'];
        $check = "SELECT * FROM sach where tenSach = '$tensach'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=book&a=index&d=error");
        }else{
            $sql = "INSERT INTO sach(tenSach, namXuatBan, idTacGia) values (:tenSach, :namXuatBan, :idTacGia)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":tenSach", $tensach);
            $stmt->bindParam(":namXuatBan",$namXuatBan);
            $stmt->bindParam(":idTacGia",$idTacGia);
            $stmt->execute();
            header("Location: .?c=book&a=index&d=success");
        }
    }
    public function RemoveBook(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_GET['id'];
        $check = "DELETE FROM sach where id = $id";
        $result = $conn->query($check);
        header("Location: .?c=book&a=index");
    }
    public function EditBook(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_POST['id'];
        $tensach = $_POST['tenSach'];
        $namXuatBan = $_POST['namXuatBan'];
        $idTacGia = $_POST['idTacGia'];
        $check = "SELECT * FROM Sach where tenSach = '$tensach'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=book&a=index&b=error");
        }else{
            $sql = "UPDATE sach SET tenSach=:tenSach, namXuatBan=:namXuatBan, idTacGia=:idTacGia where id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":tenSach", $tensach);
            $stmt->bindParam(":namXuatBan",$namXuatBan);
            $stmt->bindParam(":idTacGia",$idTacGia);
            $stmt->execute();
            header("Location: .?c=book&a=index&b=success");
        }
    }
}