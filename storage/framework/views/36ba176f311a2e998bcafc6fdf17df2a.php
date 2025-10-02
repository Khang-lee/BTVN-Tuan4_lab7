<!DOCTYPE html>
<html>
<head>
    <title>Danh sách bài viết</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>

    <?php if(session('success')): ?>
        <p style="color:green"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <ul>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <strong><?php echo e($article['title']); ?></strong> <br>
                <?php echo e($article['body']); ?> <br>
                <a href="<?php echo e(route('articles.show', $article['id'])); ?>">Xem chi tiết</a> |
                <a href="<?php echo e(route('articles.edit', $article['id'])); ?>">Sửa</a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <a href="<?php echo e(route('articles.create')); ?>">➕ Thêm bài viết</a>
</body>
</html>
<?php /**PATH C:\laragon\www\Lab01-framework\resources\views/articles/index.blade.php ENDPATH**/ ?>