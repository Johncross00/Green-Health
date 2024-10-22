<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
    <?php if(!Route::is('dashboard')): ?>
        <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('dashboard')): ?>
        <?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>

<body style="background:rgba(245,251,252,1)">
    
    <div class="content-global">
        <?php echo $__env->yieldContent('body-container'); ?>
    </div>
    <?php if (isset($component)) { $__componentOriginal9227dab7d867c26b79d09b0ebcea91c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9227dab7d867c26b79d09b0ebcea91c0 = $attributes; } ?>
<?php $component = App\View\Components\Spinner::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('spinner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Spinner::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9227dab7d867c26b79d09b0ebcea91c0)): ?>
<?php $attributes = $__attributesOriginal9227dab7d867c26b79d09b0ebcea91c0; ?>
<?php unset($__attributesOriginal9227dab7d867c26b79d09b0ebcea91c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9227dab7d867c26b79d09b0ebcea91c0)): ?>
<?php $component = $__componentOriginal9227dab7d867c26b79d09b0ebcea91c0; ?>
<?php unset($__componentOriginal9227dab7d867c26b79d09b0ebcea91c0); ?>
<?php endif; ?>
    
    
    <?php if (isset($component)) { $__componentOriginalcf93f3ed30076ee062bd95434e5b07b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9 = $attributes; } ?>
<?php $component = App\View\Components\Toastr::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('toastr'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Toastr::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9)): ?>
<?php $attributes = $__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9; ?>
<?php unset($__attributesOriginalcf93f3ed30076ee062bd95434e5b07b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcf93f3ed30076ee062bd95434e5b07b9)): ?>
<?php $component = $__componentOriginalcf93f3ed30076ee062bd95434e5b07b9; ?>
<?php unset($__componentOriginalcf93f3ed30076ee062bd95434e5b07b9); ?>
<?php endif; ?>

</body>

</html>
<?php /**PATH /home/vrtvjmeg/public_html/resources/views/layouts/html.blade.php ENDPATH**/ ?>