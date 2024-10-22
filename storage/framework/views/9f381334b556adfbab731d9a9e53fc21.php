<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title', 'jetons'); ?>
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
            background: #ffffff;
        }
        .carte {
            width: 100%;
            height: 70px;
            display: flex;
        }

        .left-section {
            background-color: #d3d3d3; /* Gris clair */
            width: 60%;
            height: 100%;
        }

        .right-section {
            background-color: #90ee90; /* Vert clair */
            width: 50%;
            height: 100%;
        }

       
        .notebook {
            margin-top:10px;
            width: 100%;
            height: 100vh;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: row;
            transform-style: preserve-3d; 
        }

        .page {
            width: 50%;
            height: 100%;
            position: absolute;
            top: 0;
            border-left: 1px solid #ddd;
            background-color: #fefefe;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
            overflow: hidden; /* Ensure content is properly contained */
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        .page:nth-child(1) {
            left: 0;
            
            transform: rotateY(-3deg); /* Adjusted rotation */
            z-index: 1;
        }

        .page:nth-child(2) {
            left: 50%;
            background:rgb(242, 248, 242);
            transform: rotateY(3deg); /* Adjusted rotation */
            z-index: 2;
        }

        
.page-content {
    display:flex;
    flex-direction:column;
    align-items:center;
    padding: 20px;
    height: 100%;
    box-sizing: border-box;
    overflow: auto; 
    font-family: 'Arial', sans-serif;
    color: #333; 
}


.page-content h2 {
    font-family: 'Georgia', serif;
    font-size: 28px;
    color: #4CAF50; 
    margin-top: 0;
    margin-bottom: 10px;
    border-bottom: 2px solid #4CAF50; 
    padding-bottom: 5px;
}

/* Sous-titres */
.page-content p strong {
    color: #2196F3; 
    font-weight: bold;
}

/* Paragraphes */
.page-content p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin: 0 0 15px 0;
}

/* Listes */
.page-content ul {
    list-style-type: disc;
    padding-left: 20px;
}

.page-content li {
    font-size: 16px;
    color: #444;
    margin-bottom: 10px;
}

/* Personnalisation des barres de défilement */
.page-content::-webkit-scrollbar {
    width: 8px;
}

.page-content::-webkit-scrollbar-track {
    background: #e0e0e0;
    border-radius: 10px;
}

.page-content::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
}

.page-content::-webkit-scrollbar-thumb:hover {
    background: #555;
}

.page-content {
    scrollbar-width: thin;
    scrollbar-color: #888 #e0e0e0;
}

.page-content {
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
.text-center{
    text-align:center;
}
@media (max-width: 768px) {
    .notebook {
        flex-direction: column;
        width: 100%;
        height: auto;
    }

    .page {
        width: 100%;
        height: auto;
        position: relative;
        transform: none; /* Remove the rotation for small screens */
        left: 0;
        border: none; /* Remove borders for better alignment */
        box-shadow: none; /* Remove inner shadows for a cleaner look */
    }
    .page:nth-child(2) {
            left: 0;
            background:rgb(242, 248, 242);
            transform: rotateY(3deg); 
            z-index: 2;
        }

}
.card{
    padding:20px;
    border-radius:0 60px 2px 2px;
    background:rgb(197, 217, 197);
}
.card,.card-header,.card-body{
  
    border:none;
   

}
/* .{
    height:100% !important;
} */
.top-right{
    width:30px;
    height:30px;
    top:0 !important;
    right:-40px !important;
    background:rgb(9, 0, 128);
    padding:5px;
    color:white;
    text-align:center;
    border-radius:50%;
    display:flex;
    justify-content: center;
    align-items: center;
    
}


     
    </style>

      

    <div class="w-100 side-container-bg">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column ">
            <div class="carte">
                <div class="left-section"></div>
                <div class="right-section"></div>
            </div>
          
            <div class="notebook">
                <div class="page">
                    <div class="page-content">
                        <h2 class="text-center">Jeton d'Argent</h2>
                        <p><strong>Qu'est-ce que le jeton d'argent ?</strong></p>
                        <p>Le jeton d'argent est une monnaie virtuelle utilisée dans notre application web pour effectuer des transactions et acheter des biens et services numériques. Chaque jeton représente une unité de valeur que vous pouvez utiliser pour diverses fonctionnalités au sein de l'application.</p>
                        
                        <p><strong>Utilisation des jetons :</strong></p>
                        <ul>
                            <li>Acheter des crédits supplémentaires pour des fonctionnalités premium.</li>
                            <li>Participer à des événements exclusifs ou des concours.</li>
                            <li>Récompenses et bonus pour une utilisation régulière de l'application.</li>
                        </ul>
                        
                        <p><strong>Avantages :</strong></p>
                        <ul>
                            <li>Transactions rapides et sécurisées.</li>
                            <li>Pas de frais de transaction supplémentaires.</li>
                            <li>Facilité d'utilisation et gestion simplifiée.</li>
                        </ul>
                        
                        <p>Pour plus d'informations sur les jetons d'argent et leur gestion, veuillez consulter notre guide ou contacter notre support client.</p>
                    </div>
                </div>
                <?php if($jeton && $jeton!==null): ?>
                <div class="page">
                    <div class="page-content">
                        <div class="row row-cols-1 row-cols-md-3 g-1">
                            <?php $__currentLoopData = $jeton; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         
                            <div class=" col w-100 flex-grow-1">
                                <?php if($key && $key >=1000): ?>
                                <div class="card d-flex justify-content-center align-items-center flex-column ">
                                    <div class="card-header position-relative">
                                     <span class="position-absolute top-right">
                                         <?php echo e($value); ?>

                                     </span>
 
                                    </div>
                                    <div class="card-body">
                                         
                                        <?php if (isset($component)) { $__componentOriginalb44a386ff9bce48d2aa3980835473940 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb44a386ff9bce48d2aa3980835473940 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.billet','data' => ['valeur' =>  $key ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('billet'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['valeur' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( $key )]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb44a386ff9bce48d2aa3980835473940)): ?>
<?php $attributes = $__attributesOriginalb44a386ff9bce48d2aa3980835473940; ?>
<?php unset($__attributesOriginalb44a386ff9bce48d2aa3980835473940); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb44a386ff9bce48d2aa3980835473940)): ?>
<?php $component = $__componentOriginalb44a386ff9bce48d2aa3980835473940; ?>
<?php unset($__componentOriginalb44a386ff9bce48d2aa3980835473940); ?>
<?php endif; ?>
                                     
                                    </div>
                                 </div>
                                <?php else: ?>
                                 <div class="card d-flex justify-content-center align-items-center flex-column ">
                                    <div class="card-header position-relative">
                                     <span class="position-absolute top-right">
                                         <?php echo e($value); ?>

                                     </span>
 
                                    </div>
                                    <div class="card-body">
                                         
                                        <?php if (isset($component)) { $__componentOriginal1772b9e09907e7b40bb9bc3ef86a6510 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1772b9e09907e7b40bb9bc3ef86a6510 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.jeton','data' => ['valeur' => $key,'size' => 90,'fvSize' => 14,'ftSize:' => 10]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jeton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['valeur' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'size' => 90,'fvSize' => 14,'ftSize:' => 10]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1772b9e09907e7b40bb9bc3ef86a6510)): ?>
<?php $attributes = $__attributesOriginal1772b9e09907e7b40bb9bc3ef86a6510; ?>
<?php unset($__attributesOriginal1772b9e09907e7b40bb9bc3ef86a6510); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1772b9e09907e7b40bb9bc3ef86a6510)): ?>
<?php $component = $__componentOriginal1772b9e09907e7b40bb9bc3ef86a6510; ?>
<?php unset($__componentOriginal1772b9e09907e7b40bb9bc3ef86a6510); ?>
<?php endif; ?>
                                     
                                    </div>
                                 </div>

                                <?php endif; ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/layouts/jetons.blade.php ENDPATH**/ ?>