<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['coupons'=>null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['coupons'=>null]); ?>
<?php foreach (array_filter((['coupons'=>null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<h4 class="text-white">Liste des bons</h4>
<section class="d-flex row g-4">
    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 g-1">
            <div class="card h-100 border-none position-relative bg-dark <?php echo e($coupon->quantite === 0 ? 'border-danger text-secondary opacity-25' : ''); ?>">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="rounded-circle p-2 bg-warning shadow-lg">
                        <?php if (isset($component)) { $__componentOriginala1a18fe69b4abd0c1e17913cd53155c2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala1a18fe69b4abd0c1e17913cd53155c2 = $attributes; } ?>
<?php $component = App\View\Components\DollarIcon::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dollar-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DollarIcon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-white']); ?>
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
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="">
                        <?php echo e($coupon->quantite); ?> en stock
                    </div>
                    <div class="">
                        <?php echo e($coupon->price); ?> Fcfa
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php /**PATH /home/sparqrqm/public_html/bons/resources/views/components/coupon-list.blade.php ENDPATH**/ ?>