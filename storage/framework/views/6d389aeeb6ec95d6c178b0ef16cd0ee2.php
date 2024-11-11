<?php $__env->startSection('title','Dashboard'); ?>
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
<?php if(Auth::check()): ?>
<?php if(Auth::check() && Auth::user()->user_type === "admin" && isset($clients)): ?>
<?php if (isset($component)) { $__componentOriginalbd68cc00c17f03b66e133eecc4ef2be6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd68cc00c17f03b66e133eecc4ef2be6 = $attributes; } ?>
<?php $component = App\View\Components\DashboardContainer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DashboardContainer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['usersbuy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usersbuy),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients),'profondeurs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profondeurs),'relationnels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationnels),'qteT' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($qteT),'coupons' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($coupons),'bmsc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($bmsc),'counts' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($counts),'qteV' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($qteV),'counterbon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($counterbon),'ventes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ventes)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd68cc00c17f03b66e133eecc4ef2be6)): ?>
<?php $attributes = $__attributesOriginalbd68cc00c17f03b66e133eecc4ef2be6; ?>
<?php unset($__attributesOriginalbd68cc00c17f03b66e133eecc4ef2be6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd68cc00c17f03b66e133eecc4ef2be6)): ?>
<?php $component = $__componentOriginalbd68cc00c17f03b66e133eecc4ef2be6; ?>
<?php unset($__componentOriginalbd68cc00c17f03b66e133eecc4ef2be6); ?>
<?php endif; ?>

<?php else: ?>
<?php echo $__env->make('clients.dashboard',['profondeurs'=>$profondeurs,
'relationnels'=>$relationnels,
'usersbuy'=>$usersbuy], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php endif; ?>
<?php echo $__env->make('layouts.auth-code', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
  const sides=document.querySelectorAll('.side-container-bg');
sides.forEach((side)=>{
  side.classList.remove('p-0');
})
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>