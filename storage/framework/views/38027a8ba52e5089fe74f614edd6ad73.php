<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title', 'utilisateurs.actifs'); ?>
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
        .card-header {
            background-color: #fd7e14;
            color: rgb(186, 177, 177);
        }
        .table th {
            color: #fd7e14;
        }
        .icon-orange {
            color: #fd7e14;
        }
        .btn-activate {
            background-color: #28a745;
            color: white;
        }
        .btn-deactivate {
            background-color: #dc3545;
            color: white;
        }
        .btn-activate:hover, .btn-deactivate:hover {
            color: white;
            /* opacity: 0.9; */
        }
       

       
    </style>

    <div class="w-100 side-container-bg">
        <div class="w-100">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="card-title text-black mb-0">Liste des Opérateurs</h2>
            </div>
            <div class="card-body">
                <!-- Table pour grands écrans -->
                <div class="table-responsive d-none d-md-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Localité</th>
                                
                                
                                <th>Identifiant</th>
                                <th>Balance</th>
                                <th>Commission</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <?php if(isset($operateurs)): ?>
                        <tbody>
                            <?php $__currentLoopData = $operateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><i class="bi bi-person icon-orange me-2"></i>
                                    <?php echo e($op->user->nom .','.$op->user->prenom); ?>

                                </td>
                                <td><i class="bi bi-envelope icon-orange me-2"></i><?php echo e($op->user->email); ?></td>
                                <td><i class="bi bi-geo-alt icon-orange me-2"></i>
                                    <?php echo e($op->location); ?>

                                </td>
                                
                                
                                <td><i class="bi bi-credit-card icon-orange me-2"></i>
                                <?php echo e($op->identifiant); ?>

                                </td>
                                <td><i class="bi bi-coin icon-orange me-2"></i>
                                <?php echo e($op->balance); ?>Gr
                                </td>
                                <td>

                                    <?php echo e($op->commissions); ?>Gr
                                </td>
                                <td>
                                    <?php echo e($op->status); ?>


                                </td>
                                <?php if($op->status=='inactive'): ?>

                                <td>
                                    <form action="<?php echo e(route('post-activer')); ?>" method="post" action="" >
                                        <?php echo method_field('POST'); ?>

                                        <?php echo csrf_field(); ?>
                                        <input required type="text" hidden name="operateur" value="<?php echo e($op->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-activate">Activer</button>
                               
                                    </form>
                                    
                                </td>
                                <?php else: ?>
                                <td>
                                    <form action="<?php echo e(route('post-deactiver')); ?>" method="post" action="" >
                                        <?php echo method_field('POST'); ?>

                                        <?php echo csrf_field(); ?>
                                        <input required type="text" hidden name="operateur" value="<?php echo e($op->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-deactivate">Désactiver</button>
                               
                                    </form>
                                   
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                        </tbody>
                        <?php endif; ?>
                    </table>
                </div>

                <!-- Cartes pour petits écrans -->
                <div class="d-md-none">
                    <?php if(isset($operateurs)): ?>
                    <?php $__currentLoopData = $operateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $op): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title text-black"><i class="bi bi-person icon-orange me-2"></i>
                                <?php echo e($op->user->nom .','.$op->user->prenom); ?>

                            </h5>
                            <p class="card-text"><i class="bi bi-envelope icon-orange me-2"></i>
                                <?php echo e($op->user->email); ?>

                            </p>
                            <p class="card-text"><i class="bi bi-geo-alt icon-orange me-2"></i>
                                <?php echo e($op->location); ?>

                            </p>
                            <p class="card-text"><i class="bi bi-credit-card icon-orange me-2"></i>
                                <?php echo e($op->identifiant); ?>

                            </p>
                            <p class="card-text"><i class="bi bi-coin icon-orange me-2"></i>Balance:<?php echo e($op->balance); ?>Gr | Commission: <?php echo e($op->commissions); ?>Gr</p>
                            <div class="mt-3">
                                <?php if($op->status=='inactive'): ?>

                                
                                    <form action="<?php echo e(route('post-activer')); ?>" method="post" action="" >
                                        <?php echo method_field('POST'); ?>

                                        <?php echo csrf_field(); ?>
                                        <input required type="text" hidden name="operateur" value="<?php echo e($op->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-activate">Activer</button>
                               
                                    </form>
                                    
                                
                                <?php else: ?>
                                
                                    <form action="<?php echo e(route('post-deactiver')); ?>" method="post" action="" >
                                        <?php echo method_field('POST'); ?>

                                        <?php echo csrf_field(); ?>
                                        <input required type="text" hidden name="operateur" value="<?php echo e($op->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-deactivate">Désactiver</button>
                               
                                    </form>
                                   
                                
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                   
                </div>
            </div>
        </div>
    </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/operateurs/list.blade.php ENDPATH**/ ?>