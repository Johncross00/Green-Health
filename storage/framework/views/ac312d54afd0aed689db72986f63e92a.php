<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('tittle'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/layouts/css/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo e(asset('build/assets/app-CGTGA1v5.js')); ?>" defer></script> 

    
    <link rel="stylesheet" href="<?php echo e(asset('build/assets/app-D8Jz5B4_.css')); ?>"> 
    <script src="<?php echo e(asset('assets/layouts/js/script.js')); ?>"></script> 
     
    <!-- CSRF Token -->
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
 
    <div class="text">
        <?php echo $__env->yieldContent('navbar'); ?>
    </div>
    <div class="aside">
        <?php echo $__env->yieldContent('sidebar'); ?>
    </div>
 <section class="home small-screen text">
   <?php echo $__env->yieldContent('content'); ?>
</section>

   
  
        <?php if(session('error')): ?>
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(session('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>

        
        
</body>

</html><?php /**PATH /home/sparqrqm/public_html/bons/resources/views/layouts/page.blade.php ENDPATH**/ ?>