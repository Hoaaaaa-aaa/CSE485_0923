<?php
require APP_ROOT.'/models/Author.php';
class AuthorService{
    public function getAuthor(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $sql = "SELECT * FROM tacgia";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = [];
        while ($row = $stmt->fetch()){
            $author = new Author($row['id'], $row['tenTacGia']);
            $data[] = $author;
        }
        return $data;
    }
    public function AddAuthor(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $tentg = $_POST['tenTacGia'];
        $check = "SELECT * FROM tacgia where tenTacGia = '$tentg'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=book&a=index&d=error");
        }else{
            $sql = "INSERT INTO tacgia(tenTacGia) values (:tenTacGia)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":tenTacGia", $tentg);
            $stmt->execute();
            header("Location: .?c=book&a=index&d=success");
        }
    }
    public function RemoveAuthor(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_GET['id'];
        $check = "DELETE FROM tacgia where id = $id";
        $conn->query($check);
        header("Location: .?c=book&a=index");
    }
    public function EditAuthor(){
        $connect = new DBConnection();
        $conn = $connect->getConn();
        $id = $_POST['id'];
        $tentg = $_POST['tenTacGia'];
        $check = "SELECT * FROM tacgia where tenTacGia = '$tentg'";
        $result = $conn->query($check);
        if($result->rowCount() > 0){
            header("Location: .?c=book&a=index&b=error");
        }else{
            $sql = "UPDATE tacgia SET tenTacGia=:tenTacGia where id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":tenTacGia", $tentg);
            $stmt->execute();
            header("Location: .?c=book&a=index&b=success");
        }
    }
}