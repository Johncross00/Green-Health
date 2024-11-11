<?php $__env->startSection('tittle','Home'); ?>
<?php $__env->startSection('navbar'); ?>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('sidebar'); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('assets/css/home.css')); ?>?v=<?php echo time(); ?>">
<div class="container">
    <div class="content">
        <h1 class="bg-span">BIENVENUE DANS VOTRE APPLICATION DE GESTION DES BONS DE RESTAURANT</h1>
        <div class="row row-cols-1 row-cols-md-3 g-1">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="step">
                            <i class='bx bx-user'></i>
                            <p>1. Créez votre compte</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="step">
                            <i class='bx bx-log-in'></i>
                            <p>2. Se connecter</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="step">
                            <i class='bx bx-food-menu'></i>
                            <p>3. Suivre l'état de votre bon</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="step">
                            <i class='bx bx-money'></i>
                            <p>4. Profiter de votre bon</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="step">
                            <i class='bx bx-support'></i>
                            <p>5.Contacter le support en cas d'aide</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php if (isset($component)) { $__componentOriginal0b61b2f29802b4f3951397f1d736f155 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0b61b2f29802b4f3951397f1d736f155 = $attributes; } ?>
<?php $component = App\View\Components\ListScroll::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('list-scroll'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ListScroll::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0b61b2f29802b4f3951397f1d736f155)): ?>
<?php $attributes = $__attributesOriginal0b61b2f29802b4f3951397f1d736f155; ?>
<?php unset($__attributesOriginal0b61b2f29802b4f3951397f1d736f155); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0b61b2f29802b4f3951397f1d736f155)): ?>
<?php $component = $__componentOriginal0b61b2f29802b4f3951397f1d736f155; ?>
<?php unset($__componentOriginal0b61b2f29802b4f3951397f1d736f155); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginaladb2c080806410f96b311c3ee7602d6c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaladb2c080806410f96b311c3ee7602d6c = $attributes; } ?>
<?php $component = App\View\Components\RotatingsCards::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('rotatings-cards'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\RotatingsCards::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaladb2c080806410f96b311c3ee7602d6c)): ?>
<?php $attributes = $__attributesOriginaladb2c080806410f96b311c3ee7602d6c; ?>
<?php unset($__attributesOriginaladb2c080806410f96b311c3ee7602d6c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaladb2c080806410f96b311c3ee7602d6c)): ?>
<?php $component = $__componentOriginaladb2c080806410f96b311c3ee7602d6c; ?>
<?php unset($__componentOriginaladb2c080806410f96b311c3ee7602d6c); ?>
<?php endif; ?>

        <hr />
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sparqrqm/public_html/bons/resources/views/welcome.blade.php ENDPATH**/ ?>