<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font/font/bootstrap-icons.css')); ?>" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Post Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title: <?php echo e($post->title); ?></h5>
                <p class="card-text">Body: <?php echo e($post->body); ?></p>
                <p class="card-text"><small class="text-muted">Created at: <?php echo e($post->created_at); ?></small></p>
                <p class="card-text"><small class="text-muted">Updated at: <?php echo e($post->updated_at); ?></small></p>
            </div>
        </div>
        <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-primary mt-3">Back</a>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Administrator\Downloads\CONG_NGHE_WEB\XAMPP\htdocs\Laravel\FisrtLaravel\resources\views/posts/show.blade.php ENDPATH**/ ?>