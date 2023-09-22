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
    max-width: 100%; /* Kích thước tối đa theo chiều rộng */
    height: auto; /* Giữ tỷ lệ khung hình */
}

@media screen and (max-width: 768px) {
    .screen{
        max-width: 70%; /* Điều chỉnh kích thước cho màn hình nhỏ hơn 768px */
    }
}
    footer{
        border: 1px solid black;
    }
    .color, .card-title{
        color:blue;
    }
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div><img class = "screen" src="images/logo2.png"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"><b>TRANG CHỦ</b></a>
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
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        <center><div><h2 class = "color">TOP BÀI HÁT YÊU THÍCH</h2></div></center>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/songs/cayvagio.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cây, lá và gió</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/songs/csmt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cuộc sống mến thương</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/songs/longme.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lòng mẹ</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/songs/phoipha.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Phôi pha</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/songs/noitinhyeubatdau.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nơi tình yêu bắt đầu</h5>
                    </div>
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