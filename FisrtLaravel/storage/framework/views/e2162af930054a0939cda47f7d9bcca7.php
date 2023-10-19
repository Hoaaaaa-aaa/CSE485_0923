<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Index Page</h2>
        <form action="<?php echo e(route('posts.index')); ?>" class="mb-3">
            <button type="submit" class="btn btn-primary">Go to Index Page</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Downloads\CONG_NGHE_WEB\XAMPP\htdocs\Laravel\FisrtLaravel\resources\views/home.blade.php ENDPATH**/ ?>