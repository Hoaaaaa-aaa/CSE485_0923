<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font/font/bootstrap-icons.css')); ?>" rel="stylesheet">
</head>
<body class="m-5">
    <div class="container">
        <h2>Edit Post</h2>
        <form method="POST" action="<?php echo e(route('posts.update', ['post' => $post->id])); ?>">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3"><?php echo e($post->body); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Administrator\Downloads\CONG_NGHE_WEB\XAMPP\htdocs\Laravel\FisrtLaravel\resources\views/posts/edit.blade.php ENDPATH**/ ?>