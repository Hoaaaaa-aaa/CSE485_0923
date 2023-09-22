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
    .screen{
    max-width: 100%;
    height: auto;
}

@media screen and (max-width: 768px) {
    .screen{
        max-width: 70%;
    }
}
    header{
        box-shadow: 0 0 12px 0 #9f9f9f;
    }
    .Info{
        display:flex;
        align-items: center;
        margin: 10px 0;
    }
    .img-thumb{
        max-width: 30%;
        margin-right: 20px;
    }
    footer{
        border: 1px solid black;
    }
    h5{
        color:blue;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div><img class="screen" src="images/logo2.png"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php"><b>TRANG CHỦ</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><b>ĐĂNG NHẬP</b></a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="card mb-3 m-5" style="max-width: 100%; border:0;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <h5>Cây và gió</h5>
                <p><b>Bài hát: </b> Cây và gió</p>
                    <p><b>Thể loại: </b> Nhạc trữ tình</p>
                    <p><b>Tóm tắt: </b>  Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát "Cây và gió đã làm tâm hôn em xao
                    động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát,
                    em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                    <p><b>Nội dung: </b>  Em và anh hai đứa quen nhau thật tình cờ. Lởi hát của anh từ bài hát "Cây và gió đã làm tâm hôn em xao
                    động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sau trong tim mình. Bởi vì em nhút nhát,
                    em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                    <p><b>Tác giả: </b> Nguyễn Văn Giả</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <center><h2>TLU'S MUSIC GARDEN</h2></center>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>