<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/TH03/views/images/logo.jpg">
    <title>Tác giả</title>
    <link rel="stylesheet" href="/TH03/views/css/bootstrap.min.css">
    <link href="/TH03/views/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style id="main-content-style"></style>
    <style id="content-main-style"></style>
</head>
<body>
<div class="container-fluid bg-secondary-subtle">
    <div class="row">
        <nav id="sidebar" class="col-2 d-sm-block d-none bg-white sidebar rounded-5">
            <div class="position-sticky sidebar-wrapper">
                <ul class="nav flex-column">
                    <li class="nav-item sidebar-element">
                        <a class="nav-link" href=".?c=book&a=index"><i class="bi bi-file-book"></i><span class="fs-5 p-3 hide-when-collapsed">Sách</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" type="submit" class="nav-link"><i class="bi bi-tags-fill"></i><span class="fs-5 p-2 hide-when-collapsed">Tác Giả</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col-10 px-md-4 col-sm-7">
            <div class="row header">
                <div class="d-flex align-items-center col-md-8" id="main-content">
                    <a href="#" id="sidebarToggle" ><i class="bi bi-list fs-1"></i></a>
                    <h2 class="m-0 ml-3">Tác Giả</h2>
                </div>
                <div class="col-md-4 search-box">
                    <form class="mt-4 w-50 d-flex">
                        <div class="input-group">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
                            <input type="text" id="searchInput" class="form-control" placeholder="Search here..." aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-5" id="content-main">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="card-title col-md-8">Quản lý tác giả</h4>
                        <span class="col-md-4">
                            <button class="btn btn-warning" type="button" id="button-addon1" onclick="deleteSelectedItems()">DELETE</button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" id="button-addon1">ADD</i></button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md" id="data-table">
                                <thead>
                                <tr>
                                    <th style="width:50px;">
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="" onclick="toggleCheckAll(this)">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>ID</strong></th>
                                    <th><strong>Tên</strong></th>
                                    <th><strong>Action</strong></th>
                                </tr>
                                </thead>
                                <tbody id="search-results">
                                <?php foreach ($tacgia as $tg){ ?>
                                <tr>
                                    <td>
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                        </div>
                                    </td>
                                    <td><strong><?= $tg->getId(); ?></strong></td>
                                    <td><?= $tg->getTenTacGia(); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#EditModal<?= $tg->getId(); ?>"><i class="bi bi-pencil"></i></a>
                                            <a class="btn btn-danger shadow btn-xs sharp delete-btn" data-bs-toggle="modal" data-bs-target="#Modal<?= $tg->getId(); ?>"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade" id="Modal<?= $tg->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Xác nhận xóa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeMessageBox()"></button>
                                                </button>
                                            </div>
                                            <div class="modal-body fs-4">
                                                <i class="bi bi-exclamation-circle-fill text-warning"></i>
                                                <span>Bạn có chắc chắn muốn xóa id <?= $tg->getId(); ?> không?</span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <a href=".?c=book&a=remove&id=<?= $tg->getId(); ?>" class="btn btn-danger" id="confirmDeleteBtn">Xóa</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="EditModal<?= $tg->getId(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Sửa tác giả</h5>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body fs-4">
                                                    <input type="hidden" name="id" value="<?= $tg->getId(); ?>">
                                                    <input class="form-control mb-3" name="tenTacGia" type="text" value="<?= $tg->getTenTacGia(); ?>" aria-label="default input example">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" name="edit" class="btn btn-success">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php if(isset($_GET['b']) && $_GET['b'] == 'success'){
                            echo '<div class="col-12 text-light bg-success p-3">Sửa thành công </div>';
                        }
                        if(isset($_GET['b']) && $_GET['b'] == 'error'){
                            echo '<div class="col-12 text-light bg-danger p-3">Sửa thất bại </div>';
                        }
                        if(isset($_GET['d']) && $_GET['d'] == 'success'){
                            echo '<div class="col-12 text-light bg-danger p-3">Thêm thành công </div>';
                        }
                        if(isset($_GET['d']) && $_GET['d'] == 'error'){
                            echo '<div class="col-12 text-light bg-danger p-3">Thêm thất bại </div>';
                        }?>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body">
                                    <input class="form-control mb-3" name="tenTacGiả" type="text" placeholder="Nhập tên tác giả" aria-label="default input example">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/TH03/views/js/popper.min.js"></script>
<script src="/TH03/views/js/bootstrap.bundle.min.js"></script>
<script src="/TH03/views/js/index.js"></script>
</body>
</html>
