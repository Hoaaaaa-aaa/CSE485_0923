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
                            <a class="nav-link" href="index.php"><b>Trang chủ</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Laravel/Pro3/BTTH01_CSE485_ex02/index.php"><b>Trang ngoài</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>Thể loại</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>Tác giả</b></a>
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
        <center><h2>Thêm mới thể loại</h2></center>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tên thể loại</span>
            <input type="text" class="form-control" placeholder="" aria-label="Name" aria-describedby="basic-addon1">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin-bottom: 60px;">
            <a href=""><button class="btn btn-success" type = "submit">Thêm</button></a>
            <a href="category.php"><button class="btn btn-warning" type = "reset">Quay lại</button></a>
        </div>
    </div>
    <footer>
        <center><h2>TLU'S MUSIC GARDEN</h2></center>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>