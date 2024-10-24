<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="GREEN DETOX">
    <meta property="og:description" content="Rejoignez notre communauté.">
    <meta property="og:image" content="<?php echo e(asset('assets/images/logo-bonr.png')); ?>">
    <meta property="og:url" content="<?php echo e(route('home')); ?>">
    <meta property="og:type" content="website">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/css/app.css']); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <meta name="google-site-verification" content="XlL6Hde6-hJL2HiYzL6ZvmvO6hfxLShfCHASRxhIUrc" />
    <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flag-icon-css@4.1.7/css/flag-icons.min.css"
        integrity="sha256-8qup5VqQKcE2cLILwBU2zpXUkT+eW5tI1ZLzJjh/TdY=" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <!-- Dans votre fichier layouts.index ou avant votre script -->
    

    <?php if(!Route::is('dashboard')): ?>
        <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(Route::is('dashboard')): ?>
        <?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <!--CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <style>
        .content-global {
            display: none;
        }
    </style>

</head>

<body style="background:rgba(245,251,252,1)">
    <?php if (isset($component)) { $__componentOriginal9b0da1ce4a7273760fcbfd5667774437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437 = $attributes; } ?>
<?php $component = App\View\Components\Loader::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('loader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Loader::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $attributes = $__attributesOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__attributesOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437)): ?>
<?php $component = $__componentOriginal9b0da1ce4a7273760fcbfd5667774437; ?>
<?php unset($__componentOriginal9b0da1ce4a7273760fcbfd5667774437); ?>
<?php endif; ?>
    <div class="content-global">
        <?php echo $__env->yieldContent('body-container'); ?>
    </div>



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
<?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/layouts/html.blade.php ENDPATH**/ ?>