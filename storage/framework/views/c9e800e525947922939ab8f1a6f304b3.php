<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Ajax Pagination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Laravel 10 Pagination </h2>

        <div id="data-wrapper">
            <div class="row">
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-3" style="padding-bottom:10px;">
                    <div class="card">
                        <img src="https://placehold.co/300x200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($rs->id); ?> : <?php echo e($rs->title); ?></h5>
                            <p class="card-text"><?php echo $rs->body; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="d-flex">
            <?php echo $post->links(); ?>

        </div>
    </div>
</body>

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/laravel/myapp/resources/views/post.blade.php ENDPATH**/ ?>