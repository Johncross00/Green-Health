<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('body-container'); ?>
<?php if (isset($component)) { $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5 = $attributes; } ?>
<?php $component = App\View\Components\Hero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Hero::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $attributes = $__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__attributesOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5)): ?>
<?php $component = $__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5; ?>
<?php unset($__componentOriginal20742eb2771d985bdc9eeee85f5ff6b5); ?>
<?php endif; ?>
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Basé sur l'excellence</h2>
                <p class="mb-4">Nous vous aiderons à suivre avec éfficacité les bons de restaurations payés chez nous </p>
                <p><a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary px-4  rounded shadow">Suivie</a></p>
            </div> 
            
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="<?php echo e(route('dashboard')); ?>">
                    <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid product-thumbnail">
                    <h3 class="product-title">Bon resto</h3>
                    <strong class="product-price">500</strong>

                    <span class="icon-cross">
                        <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid">
                    </span>
                </a>
            </div> 
          
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="<?php echo e(route('dashboard')); ?>">
                    <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid product-thumbnail">
                    <h3 class="product-title">Bon resto</h3>
                    <strong class="product-price">1000</strong>

                    <span class="icon-cross">
                        <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid">
                    </span>
                </a>
            </div>
            
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="<?php echo e(route('dashboard')); ?>">
                    <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid product-thumbnail">
                    <h3 class="product-title">Bon resto</h3>
                    <strong class="product-price">2000</strong>

                    <span class="icon-cross">
                        <img src="<?php echo e(asset('assets/images/dollar.jpg')); ?>"  class="img-fluid">
                    </span>
                </a>
            </div>
           
        </div>
    </div>
</div> 

<div style="margin-bottom:40px;">
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
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sparqrqm/public_html/bons/resources/views/layouts/home.blade.php ENDPATH**/ ?>