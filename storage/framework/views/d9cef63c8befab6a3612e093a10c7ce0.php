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

      

        .card {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card,
        .card-header,
        .card-body {
            border: none;
            background-color: #ffffff;
        }

        .table,
        .thead,
        tr,
        th,
        td,
        tbody {
            border: none;
        }

        .table thead th {
            font-size: 13px;
            text-align: center;
            
        }

        .table tbody td {
            font-size: 12px;
            
            text-align: center;
            border-top: 1px solid rgb(35, 47, 130);
        }

        .table th,
        .table td {
            padding: 4px 8px;
            font-size: 12px;
            white-space: normal;
            word-wrap: break-word;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table th:nth-child(1),
        .table td:nth-child(1) {
            width: 40px;
        }

        /* Ajustez selon vos besoins */

        .table-responsive::-webkit-scrollbar {
            height: 10px;
        }

        .table-responsive::-webkit-scrollbar-track {
            background: #ebecf0;
        }

        .table-responsive::-webkit-scrollbar-thumb {
            background: #6c6c86;
            border-radius: 4px;
        }

        .number-user-red {
            max-width: 150px;
            background: rgb(134, 70, 70);
            color: #fff;
        }

        .number-user-green {
            max-width: 150px;
            background: rgb(64, 109, 64);
            color: #fff;
        }
      
        .table tbody  .wt_p td{
            background-color: rgba(200, 90, 90, 0.8) !important;
            
        }

        .table tbody  .w_p td {
            background-color: rgba(80, 130, 80, 0.8) !important;

}


        .row-container {
            background-color: #002 !important;
        }

      

        .text-infor {
            font-size: 1.2rem;
           
            color: #002;
            background: rgb(220, 228, 228);
        }

        .text-th {
            font-size: 1rem;
            color: #333;
        }

        .number-user-red,
        .number-user-green {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            min-width: 50px;
            text-align: center;
        }

        .number-user-red {
            background-color: rgb(134, 70, 70);
            color: #fff;
        }

        .number-user-green {
            background-color: rgb(64, 109, 64);
            color: #fff;
        }

        .infor {
            text-align: center;
        }

        @media (min-width: 768px) {
            .infor {
                text-align: left;
            }
            
        }

        .d-flex>.infor span {
            transition: transform 0.3s ease-in-out;
        }

        .d-flex>.infor span:hover {
            transform: scale(1.05);
        }
    </style>

    <div class="w-100 side-container-bg">
        <div class="w-100">
            <div class="mx-auto flex-grow-1 d-flex flex-column justify-content-center align-items-center">
                <div class="card flex-grow-1 w-100">
                    <div class="card-header">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <div class="infor col-12 col-md-4 mb-2">
                                <span class="text-center text-infor text-th d-block">
                                    Informations du compte, <?php echo e($clients->count()); ?> utilisateurs
                                </span>
                            </div>
                            <div class="infor col-12 col-md-3 mb-2 d-flex justify-content-md-end align-items-center">
                                <span class="text-th me-2">Comptes non actifs</span>
                                <span class="number-user-red rounded-sm shadow">
                                    <?php echo e($users_wt_p->count()); ?>

                                </span>
                            </div>
                            <div class="infor col-12 col-md-3 mb-2 d-flex justify-content-md-end align-items-center">
                                <span class="text-th me-2">Comptes actifs</span>
                                <span class="number-user-green rounded-sm shadow">
                                    <?php echo e($users_w_p->count()); ?>

                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-truncate">Nom</th>
                                        <th class="text-truncate">Prénom</th>
                                        <th class="text-truncate">Naissance</th>
                                        <th class="text-truncate">Email</th>
                                        <th class="text-truncate">Pseudo</th>
                                        <th class="text-truncate">N.reseau</th>
                                        <th class="text-truncate">N.whatsapp</th>
                                        <th class="text-truncate">Région</th>
                                        <th class="text-truncate">Ville</th>
                                        <th class="text-truncate">Commune</th>
                                        <th class="text-truncate">Quartier</th>
                                        <th class="text-truncate">Réseau</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($users_wt_p)): ?>
                                        <?php $__currentLoopData = $users_wt_p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="wt_p">
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->nom); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->prenom); ?></td>
                                                <td class="text-truncate" style="max-width:60px;">
                                                    <?php echo e($user->date_naissance); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->email); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->pseudo); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->numero_reseau); ?>

                                                </td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->numwhats); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->region); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->ville); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->commune); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->quartier); ?>

                                                </td>
                                                <?php if(isset($user['reseau1']) && $user['reseau1'] && $user['reseau1'] !== ''): ?>
                                                    <td class="text-truncate" style="max-width:60px;">
                                                        <?php echo e($user['reseau1']); ?></td>
                                                <?php else: ?>
                                                    <td class="text-truncate" style="max-width:60px"><?php echo e($user['reseau2']); ?>

                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <?php if(isset($users_w_p)): ?>
                                        <?php $__currentLoopData = $users_w_p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="w_p">
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->nom); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->prenom); ?></td>
                                                <td class="text-truncate" style="max-width:60px;">
                                                    <?php echo e($user->date_naissance); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->email); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->pseudo); ?></td>
                                                <td class="text-truncate" style="max-width:60px;">
                                                    <?php echo e($user->numero_reseau); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->numwhats); ?>

                                                </td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->region); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->ville); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->commune); ?></td>
                                                <td class="text-truncate" style="max-width:60px;"><?php echo e($user->quartier); ?>

                                                </td>
                                                <?php if(isset($user['reseau1']) && $user['reseau1'] && $user['reseau1'] !== ''): ?>
                                                    <td class="text-truncate" style="max-width:60px;">
                                                        <?php echo e($user['reseau1']); ?></td>
                                                <?php else: ?>
                                                    <td class="text-truncate" style="max-width:60px">
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/admin/comptes.blade.php ENDPATH**/ ?>