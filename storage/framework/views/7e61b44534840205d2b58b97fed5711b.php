<style>
    :root {
        --side-bg: bg-dark;
    }
    
    .side-container-bg {
        background: var(--side-bg);
        width: 100%;
    }

    .container-fluid.page-body-wrapper {
        display: flex;
    }

    .main-panel {
        flex-grow: 1;
    }

    .content-wrapper {
        width: 100%;
        padding: 20px; /* Ajustez si nécessaire */
    }
    .container-fluid.page-body-wrapper,
.container-fluid.page-body-wrapper  {
    margin-right: 0 !important;
    padding-right: 0 !important;
    margin-left: 0 !important;
    padding-left: 0 !important;
    display: flex;
    justify-content:center;
    align-items: center
    flex-direction:column;
   
}

</style>

<?php $__env->startSection('body-container'); ?>

    <div class="container-scroller" style="background: rgb(208, 225, 231);">
        <!--sidebar-->
        <?php echo $__env->yieldContent('sidebar'); ?>

        <div class="container-fluid page-body-wrapper" style="background: rgb(208, 225, 231);">
            <?php echo $__env->yieldContent('navbar'); ?>

            <div class="main-panel side-container-bg">
                <div class="content-wrapper side-container-bg w-100">
                    <?php echo $__env->yieldContent('sidebar-container'); ?>
                </div>
            </div>

        </div>

    </div>

    <script src="<?php echo e(asset('assets/vendor/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/vendors/owl-carousel-2/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/dashboard.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/layouts/index.blade.php ENDPATH**/ ?>