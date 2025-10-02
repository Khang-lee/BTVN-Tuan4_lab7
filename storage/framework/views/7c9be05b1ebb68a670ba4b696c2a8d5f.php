<!DOCTYPE html>
<html>
<head>
    <title>Thêm bài viết</title>
</head>
<body>
    <h1>Thêm bài viết mới</h1>

    
    <?php if($errors->any()): ?>
        <div style="color: red">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('articles.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Tiêu đề:</label><br>
        <input type="text" name="title" value="<?php echo e(old('title')); ?>"><br><br>

        <label>Nội dung:</label><br>
        <textarea name="body" rows="5" cols="40"><?php echo e(old('body')); ?></textarea><br><br>

        <button type="submit">Lưu</button>
    </form>

    <br>
    <a href="<?php echo e(route('articles.index')); ?>">⬅ Quay lại danh sách</a>
</body>
</html>
<?php /**PATH C:\laragon\www\Lab01-framework\resources\views/articles/create.blade.php ENDPATH**/ ?>