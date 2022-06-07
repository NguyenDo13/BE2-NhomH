<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
    <?php $__env->startSection('header'); ?>
    <h1></h1>
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('body'); ?>
    <h1>custom body here</h1>
    <?php echo $__env->yieldSection(); ?>
    <?php $__env->startSection('footer'); ?>
     <?php echo $__env->make('clients.modules.module-12', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldSection(); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>

</html><?php /**PATH D:\Back-end2\BE2-NhomH\Porto-web\resources\views/layouts/master.blade.php ENDPATH**/ ?>