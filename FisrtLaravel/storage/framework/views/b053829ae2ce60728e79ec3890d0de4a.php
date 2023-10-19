<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font/font/bootstrap-icons.css')); ?>" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Create New Post</h2>
        <form action="<?php echo e(route('posts.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" id="body" name="body" rows="5"></textarea>
            </div>
            <div class = 'mt-2'>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Thêm liên kết đến Bootstrap JavaScript (tùy chọn) -->
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Administrator\Downloads\CONG_NGHE_WEB\XAMPP\htdocs\Laravel\FisrtLaravel\resources\views/posts/create.blade.php ENDPATH**/ ?>