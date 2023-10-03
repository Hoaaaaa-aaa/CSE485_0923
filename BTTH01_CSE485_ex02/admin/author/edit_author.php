<?php
    //Dich vu Bao ve
    session_start();

    //Kiem tra thong tin để bảo vệ kiểm soát ra vào
    if(!isset($_SESSION['Login'])){
        header("Location:../../login.php");
    }
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy và kiểm tra dữ liệu từ biểu mẫu
    $ma_tgia = $_POST["ma_tgia"];
    $ten_tgia = $_POST["ten_tgia"];
    $hinh_tgia = $_POST["hinh_tgia"];

    // Cập nhật thông tin thể loại trong cơ sở dữ liệu sử dụng SQL
    try {
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE tacgia SET ten_tgia = :ten_tgia, hinh_tgia = :hinh_tgia WHERE ma_tgia = :ma_tgia";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":ten_tgia", $ten_tgia, PDO::PARAM_STR);
        $stmt->bindParam(":hinh_tgia", $hinh_tgia, PDO::PARAM_STR);
        $stmt->bindParam(":ma_tgia", $ma_tgia, PDO::PARAM_INT);
        $stmt->execute();

        // Chuyển hướng trở lại index.php sau khi cập nhật
        header("Location: author.php");
        exit();
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
} else {
    // Hiển thị biểu mẫu để chỉnh sửa thông tin thể loại
    // Lấy thông tin thể loại sử dụng $_GET["id"] và điền vào các trường của biểu mẫu
    $ma_tgia = $_GET["id"];

    try {
        $conn = new PDO('mysql:host=localhost;dbname=btth01_cse485', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM tacgia WHERE ma_tgia = :ma_tgia";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":ma_tgia", $ma_tgia, PDO::PARAM_INT);
        $stmt->execute();

        $tacgia = $stmt->fetch();
    } catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

</head>
<style>
    *{
        padding: 1px;
    }
    header{
        box-shadow: 0 0 12px 0 #9f9f9f;
    }
    footer{
        border: 1px solid black;
    }
    .nav-link{
        color:#9f9f9f;
    }
    .Edit{
        margin: 60px 80px 10px 80px;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Administration</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php"><b>Trang chủ</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../index.php"><b>Trang ngoài</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../category/category.php"><b>Thể loại</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Tác giả</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>Bài viết</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class = "Edit">
        <center><h2>Sửa thông tin tác giả</h2></center>
        <?php
            if(isset($_GET['error'])){
                echo "<p style='background-color:red'>{$_GET['error']}</p>";
            }
        ?>
        <form action="edit_author.php" method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Mã tác giả</span>
                <input type="text" class="form-control" name = "ma_tgia" value="<?= $tacgia[0];?>" readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tên tác giả</span>
                <input type="text" class="form-control" name = "ten_tgia" value="<?= $tacgia[1];?>" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Hình tác giả</span>
                <input type="text" class="form-control" name = "hinh_tgia" value="<?= $tacgia[2];?>">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom: 60px;">
                <button class="btn btn-success" type = "submit" name="Save" value="Lưu lại">Lưu lại</button>
                <button class="btn btn-warning" type="button" onclick="goBack()">Quay lại</button>
                <script>
                    function goBack() {
                        window.history.back(); // Quay lại trang trước đó trong lịch sử trình duyệt
                    }
                </script>
            </div>
        </form>
    </div>
    <footer>
        <center><h3>TLU'S MUSIC GARDEN</h3></center>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>