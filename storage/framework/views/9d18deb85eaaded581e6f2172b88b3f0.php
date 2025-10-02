<!DOCTYPE html>
<html>
<head>
    <title>Sửa bài viết</title>
</head>
<body>
    <h1>Sửa bài viết #<?php echo e($article['id']); ?></h1>

    <form action="<?php echo e(route('articles.update', $article['id'])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Tiêu đề</label><br>
        <input type="text" name="title" value="<?php echo e(old('title', $article['title'])); ?>">
        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color:red"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br><br>

        <label>Nội dung</label><br>
        <textarea name="body"><?php echo e(old('body', $article['body'])); ?></textarea>
        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p style="color:red"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br><br>

        <button type="submit">Cập nhật</button>
    </form>

    <a href="<?php echo e(route('articles.index')); ?>">⬅ Quay lại danh sách</a>
</body>
</html>
<?php /**PATH C:\laragon\www\Lab01-framework\resources\views/articles/edit.blade.php ENDPATH**/ ?>