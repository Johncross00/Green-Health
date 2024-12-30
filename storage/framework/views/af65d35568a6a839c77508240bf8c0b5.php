
<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','Mes bons'); ?>
<?php $__env->startSection('sidebar'); ?>
<?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navbar'); ?>
<?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar-container'); ?>
<style>
    .side-container-bg {
        background: rgba(245, 251, 252, 1);
    }

    body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 20px;
        /* Coins arrondis */
        background: rgba(255, 221, 0, 0.5);
        /* Fond semi-transparent */
        backdrop-filter: blur(10px);
        /* Effet de flou */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        /* Ajout d'une ombre subtile */
        transition: transform 0.3s ease;
        /* Animation de transformation */
    }

    .card:hover {
        transform: scale(1.05);
        /* Effet de zoom au survol */
    }

    .card-title {
        color: orange;
        /* Couleur orange pour le titre */
        font-weight: bold;
    }

    .card-title {
        color: orange;
        font-weight: bold;
        font-size: 24px;
    }

    .card-text {
        color: #333;
    }

    .card-footer {
        background-color: #f7f7f7;
        border-top: none;
        color: #555;
    }

    .card-body {
        padding: 20px;
    }

    /* Gestion de l'alignement horizontal des cartes */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        /* Espacement entre les cartes */
        justify-content: left;
        /* Alignement à gauche */
    }

    .col-md-6 {
        flex: 0 0 calc(33.3333% - 20px);
        /* Ajustement de la largeur des cartes */
    }

    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
            /* Cartes plus petites sur les écrans moyens */
        }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            flex: 0 0 100%;
            /* Cartes qui prennent toute la largeur sur les petits écrans */
        }
    }
</style>
<?php
$user = Auth::user();
?>

<div class="w-100 side-container-bg">
    <div class="w-100">
        <div class="container">
            <h1 class="mb-4">Mes Bons</h1>
            <?php if($coupons->isEmpty()): ?>
            <p>Vous ne possédez aucun bon pour le moment.</p>
            <?php else: ?>
            <div class="row">
                <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($coupon->code); ?></h5>
                            <p class="card-text">Prix: <?php echo e($coupon->price); ?> Fcfa</p>
                            <p class="card-text">Description: <?php echo e($coupon->description); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/coupons/user_coupons.blade.php ENDPATH**/ ?>