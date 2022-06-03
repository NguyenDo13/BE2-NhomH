

<?php $__env->startSection('title'); ?>
    Trang chủ
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <link rel="stylesheet" href="<?php echo e(asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/clients/css/font-awesome.min.css')); ?>">
    <link href="<?php echo e(asset('assets/clients/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/clients/css/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('clients.modules.module-4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-5', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-6', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.components.sale_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-7', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-8', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-9', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-10', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('clients.modules.module-11', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('js'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('assets/clients/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/clients/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/clients/js/module-8.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/clients/js/module-5.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Back-end2\BE2-NhomH\Porto-web\resources\views/clients/pages/home.blade.php ENDPATH**/ ?>