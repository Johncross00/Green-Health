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

      
 h5{
    color:black !important;
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #fd7e14;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: orange;
        }
        .card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
       
        .card {
            border-color: #ffa500;
        }
        .card-title {
            color: #ff8c00;
        }
        .table th {
            background-color: #fff5e6;
            color: #ff8c00;
        }
        .table-hover tbody tr:hover {
            background-color: #fff5e6;
        }
        .badge-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .badge-warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
        .badge-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

       
    </style>
<?php 
$user=Auth::user();
?>

    <div class="w-100 side-container-bg">
        <div class="w-100 flex-column">
            <?php if($user->operateur): ?>
           

    
  <?php if($user->operateur->status==="active"): ?>
        <h1 class="mb-4 text-orange">Tableau de bord de l'opérateur</h1>
        
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Balance
                            <i class="fas fa-credit-card text-muted"></i>
                        </h5>
                        <p class="card-text fs-4 fw-bold text-orange">
                            <?php echo e($user->operateur->balance); ?>Gr
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Retraits validés
                            <i class="fas fa-users text-muted"></i>
                        </h5>
                        <p class="card-text fs-4 fw-bold text-orange">
                            <?php echo e($user->operateur->transactions->count()); ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Commission
                            <i class="fas fa-dollar-sign text-muted"></i>
                        </h5>
                        <p class="card-text fs-4 fw-bold text-orange">
                            <?php echo e($user->operateur->commissions); ?>

                            Gr</p>
                    </div>
                </div>
            </div>
        </div>
       
        <?php if(isset($user->operateur->transactions)): ?>
       
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4">Détails des validations de retrait</h5>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Client</th>
                                <th>Somme</th>
                                <th>Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $user->operateur->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($trans['identifiant']); ?></td>
                                <td>
                                    <?php echo e($user->nom .','.$user->prenom); ?>


                                </td>
                                <td>
                                    <?php echo e($trans['sommes']); ?>Gr
                                </td>
                                <td><span class="badge badge-success">Validé</span></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php endif; ?>
    </div>
    <?php endif; ?>

  
            <div class="card">
                <h4>Informations Personnelles</h4>
                <?php if($user->operateur->status!=='active'): ?>
                <p>Veuillez Modifier si possible votre localité avant activation de votre demande</p>
                <?php endif; ?>
                <form id="personalInfoForm" action="<?php echo e(route('post-update-localite')); ?>" method="POST">
                  <?php echo method_field('POST'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      
                        <input type="text"  hidden name="id" value="<?php echo e($user->operateur->id); ?>" readonly >
                    </div>
                    <div class="form-group"> 
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" value="<?php echo e($user->nom); ?>" readonly >
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" value="<?php echo e($user->prenom); ?>"  readonly>
                    </div>
                    <?php if($user->operateur->status!=='active'): ?>
                    <div class="form-group">
                        <label for="localite">Localité</label>
                        <input type="text" id="localite" value="<?php echo e($user->operateur->location); ?>" name="location" required >
                    </div>
                    <?php else: ?>
                    <div class="form-group">
                        <label for="localite">Localité</label>
                        <input type="text" id="localite" readonly value="<?php echo e($user->operateur->location); ?>" name="location" required >
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" id="identifiant" value="<?php echo e($user->operateur->identifiant); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select id="statut"  readonly>
                            <option selected disabled value="<?php echo e($user->operateur->status); ?>">
                                <?php echo e($user->operateur->status); ?>

                            </option>
                        </select>
                    </div>
                    <?php if($user->operateur->status!=='active'): ?>
                    <button type="submit">Modifier</button>
                    <?php endif; ?>
                </form>
            </div>
            <?php endif; ?>
    </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/operateurs/info.blade.php ENDPATH**/ ?>