<div class="module-13">

    <div class="">
        <div class="col-md-12" style="float: right;">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo e(asset('assets/clients/images/fashion-banner.png')); ?>" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('assets/clients/images/fashion-banner2.png')); ?>" class="d-block w-100"
                            alt="...">

                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-md-12">
            <?php echo $__env->make('clients.modules.module-15', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

</div>
<?php /**PATH D:\Back-end2\BE2-NhomH\Porto-web\resources\views/clients/modules/module-13.blade.php ENDPATH**/ ?>