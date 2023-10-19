<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('font/font/bootstrap-icons.css')); ?>" rel="stylesheet">
</head>
<body class="m-5">
    <nav class="navbar bg-body">
    <div class="container-fluid">
        <h2>Post Details</h2>
        <form class="d-flex">
        <a class="btn btn-success" href="<?php echo e(route('posts.create')); ?>"><b>+</b> Add New Post</a>
        </form>
    </div>
    </nav>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="2" style="width: 8%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->body); ?></td>
                        <td><?php echo e($post->created_at); ?></td>
                        <td><?php echo e($post->updated_at); ?></td>
                        <td>
                            <a href= "<?php echo e(route('posts.show', ['post' => $post->id])); ?>"><i class="bi bi-eye"></i></a>
                            <a href= "<?php echo e(route('posts.edit', ['post' => $post->id])); ?>"><i class="bi bi-pencil"></i></a>
                            <form id="delete-form-<?php echo e($post->id); ?>" action="<?php echo e(route('posts.destroy', ['post' => $post->id])); ?>" method="POST" style="display: none;">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                            </form>
                            <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-<?php echo e($post->id); ?>').submit(); }">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item <?php echo e(($posts->currentPage() == 1) ? 'disabled' : ''); ?>">
                <a class="page-link" href="<?php echo e($posts->previousPageUrl()); ?>">Previous</a>
            </li>
            <?php for($i = 1; $i <= $posts->lastPage(); $i++): ?>
                <li class="page-item <?php echo e(($posts->currentPage() == $i) ? 'active' : ''); ?>">
                    <a class="page-link" href="<?php echo e($posts->url($i)); ?>"><?php echo e($i); ?></a>
                </li>
            <?php endfor; ?>
            <li class="page-item <?php echo e(($posts->currentPage() == $posts->lastPage()) ? 'disabled' : ''); ?>">
                <a class="page-link" href="<?php echo e($posts->nextPageUrl()); ?>">Next</a>
            </li>
        </ul>
    </div>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Administrator\Downloads\CONG_NGHE_WEB\XAMPP\htdocs\Laravel\FisrtLaravel\resources\views/posts/index.blade.php ENDPATH**/ ?>