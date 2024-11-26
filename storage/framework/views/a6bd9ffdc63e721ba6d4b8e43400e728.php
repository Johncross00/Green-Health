<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','Demande'); ?>
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
        background-color: #fff9c4;
    }
    .card {
        background-color: #fff59d;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        background-color: #f57f17;
        color: white;
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
    }
    .btn-submit {
        background-color: #fbc02d;
        color: white;
        border: none;
        transition: background-color 0.3s ease;
    }
    .btn-submit:hover {
        background-color: #f57f17;
    }
</style>

<div class="side-container-bg d-flex justify-content-center align-items-center vh-100">
    <div class="card w-50">
        <div class="card-header">
            Demande d'Opérateur
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('post-operateur')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="localite">Votre email</label>
                    <input type="text" class="form-control" id="localite" value="<?php echo e(Auth::user()->email); ?>" readonly placeholder="Entrez votre localité" required>
                </div>
                <div class="form-group">
                    <label for="localite">Votre nom & prénom</label>
                    <input type="text" class="form-control" id="localite" value="<?php echo e(Auth::user()->nom .','. Auth::user()->prenom); ?>" readonly placeholder="Entrez votre localité" required>
                </div>

                <div class="form-group">
                    <label for="localite">Votre localité</label>
                    <input type="text" class="form-control" id="localite" name="localite" placeholder="Ville - quartier" votre localité required>
                </div>
                
                <button type="submit" class="btn btn-submit w-100 mt-3">Soumettre la Demande</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/operateurs/create.blade.php ENDPATH**/ ?>