
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
        background: rgba(245, 251, 252, 0.5);
    }

    body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.8); /* Fond blanc plus prononcé */
        backdrop-filter: blur(10px); /* Effet de flou */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre subtile */
        border: 1px solid rgba(255, 255, 255, 0.3); /* Bordure subtile */
        transition: transform 0.3s ease, background 0.3s ease; /* Animation de transformation et de fond */
    }

    .card:hover {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 0.9); /* Fond légèrement plus opaque au survol */
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

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: left;
    }

    .col-md-6 {
        flex: 0 0 calc(33.3333% - 20px);
    }

    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
        }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            flex: 0 0 100%;
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
            <section class="row g-3">
                <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 position-relative border-0 shadow-sm <?php echo e($coupon->quantite === 0 ? 'opacity-50' : ''); ?>"
                        style="background: rgba(255, 255, 255, 0.8); border-radius: 15px; overflow: hidden;">
                        <div class="card-header text-center bg-warning text-dark fw-bolder fs-6 py-2 text-uppercase">
                            <?php echo e($coupon->name); ?>

                        </div>
                        <div class="card-body d-flex flex-column align-items-center justify-content-center p-2">
                            <div class="rounded-circle p-2 bg-warning shadow-sm mb-2" style="width: 50px; height: 50px;">
                                <?php if (isset($component)) { $__componentOriginala1a18fe69b4abd0c1e17913cd53155c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala1a18fe69b4abd0c1e17913cd53155c2 = $attributes; } ?>
<?php $component = App\View\Components\DollarIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dollar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DollarIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white','style' => 'font-size: 1.2rem;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala1a18fe69b4abd0c1e17913cd53155c2)): ?>
<?php $attributes = $__attributesOriginala1a18fe69b4abd0c1e17913cd53155c2; ?>
<?php unset($__attributesOriginala1a18fe69b4abd0c1e17913cd53155c2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1a18fe69b4abd0c1e17913cd53155c2)): ?>
<?php $component = $__componentOriginala1a18fe69b4abd0c1e17913cd53155c2; ?>
<?php unset($__componentOriginala1a18fe69b4abd0c1e17913cd53155c2); ?>
<?php endif; ?>
                            </div>
                            <div class="text-center">
                                <p class="mb-1 fs-6"><strong><?php echo e($coupon->quantite); ?></strong> en stock</p>
                                <p class="mb-0 fs-6 text-warning"><strong><?php echo e(number_format($coupon->price, 0, ',', ' ')); ?></strong> Fcfa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/coupons/user_coupons.blade.php ENDPATH**/ ?>