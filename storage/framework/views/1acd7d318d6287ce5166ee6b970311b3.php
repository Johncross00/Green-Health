<div class="">
    <?php if (isset($component)) { $__componentOriginal321247ebe657adbe55656f8863524ca6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal321247ebe657adbe55656f8863524ca6 = $attributes; } ?>
<?php $component = App\View\Components\ClientDashboard::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('client-dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ClientDashboard::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal321247ebe657adbe55656f8863524ca6)): ?>
<?php $attributes = $__attributesOriginal321247ebe657adbe55656f8863524ca6; ?>
<?php unset($__attributesOriginal321247ebe657adbe55656f8863524ca6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal321247ebe657adbe55656f8863524ca6)): ?>
<?php $component = $__componentOriginal321247ebe657adbe55656f8863524ca6; ?>
<?php unset($__componentOriginal321247ebe657adbe55656f8863524ca6); ?>
<?php endif; ?>
</div>
<div class="">
    <?php if (isset($component)) { $__componentOriginald9fb51341efdd332de3b82f5e347ca00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9fb51341efdd332de3b82f5e347ca00 = $attributes; } ?>
<?php $component = App\View\Components\Relationnel::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('relationnel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Relationnel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profondeurs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profondeurs),'relationnels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationnels)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9fb51341efdd332de3b82f5e347ca00)): ?>
<?php $attributes = $__attributesOriginald9fb51341efdd332de3b82f5e347ca00; ?>
<?php unset($__attributesOriginald9fb51341efdd332de3b82f5e347ca00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9fb51341efdd332de3b82f5e347ca00)): ?>
<?php $component = $__componentOriginald9fb51341efdd332de3b82f5e347ca00; ?>
<?php unset($__componentOriginald9fb51341efdd332de3b82f5e347ca00); ?>
<?php endif; ?>
</div>

<?php if(Auth::user()->transactions->count()): ?>
    <div class="historique bg-dark">
        <div class="card bg-dark border-0">
            <div class="card-header">
                <small>Historique des bons validés</small>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type de bon</th>
                            <th>Quantité</th>
                            <th>Date de validation</th>
                            <th>Status actuel</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = Auth::user()->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $bonDate = optional($trans->bon)->date;
                                $isInvalid = $bonDate
                                    ? \Carbon\Carbon::parse($bonDate)->lt(\Carbon\Carbon::now())
                                    : false;
                            ?>
                            <tr class="<?php echo e($isInvalid ? 'border-isInvalid' : ''); ?>">
                                <td><?php echo e(optional($trans->bon)->price ?? 'N/A'); ?></td>
                                <td><?php echo e($trans->quantite); ?></td>
                                <td><?php echo e($trans->created_at); ?></td>
                                <td class="<?php echo e($isInvalid ? 'text-danger' : 'text-success'); ?>">
                                    <?php echo e($isInvalid ? 'Invalide' : 'Validé'); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="d-flex justify-content-center align-content-center">
        <span>Aucun bon validé</span>
    </div>
<?php endif; ?>

<style>
    .border-isInvalid {
        border: 1px solid red;
    }
</style>
<?php /**PATH C:\Laravel\35-Sant--main\resources\views/clients/dashboard.blade.php ENDPATH**/ ?>