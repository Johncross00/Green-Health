 
 <?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php $__env->startSection('title','Création de bon'); ?>
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
 <?php if(session('success')): ?>
 <div class="alert alert-success">
     <?php echo e(session('success')); ?>

 </div>
 <?php endif; ?>

 <?php if(session('error')): ?>
 <div class="alert alert-danger">
     <?php echo e(session('error')); ?>

 </div>
 <?php endif; ?>

 <?php if($errors->any()): ?>
 <div class="alert alert-danger">
     <ul>
         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li><?php echo e($error); ?></li>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </ul>
 </div>
 <?php endif; ?>
 <style>
     .side-container-bg {
         background: rgba(245, 251, 252, 1);
     }

     .container {
         max-width: 600px;
     }

     .form-container {
         background: #fff;
         padding: 20px;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     }

     .form-group {
         margin-bottom: 15px;
         position: relative;
     }

     .bon-mdi {
         margin-right: 10px;
     }

     .form-group .mdi {
         position: absolute;
         left: 10px;
         top: 50%;
         transform: translateY(-50%);
         color: #007bff;
     }

     .form-control {
         padding-left: 40px;
         border: none;
         border-bottom: 2px solid rgb(108, 108, 114);
         border-radius: 0;
         transition: border-color 0.3s;
         outline: none;
     }

     .form-control:focus {
         outline: none;
         border-bottom: 2px solid #007bff;
     }

     .input-group-text {
         border: none;
         background: none;
     }

     .form-check-input {
         margin-top: 0.3rem;
     }

     .error {
         color: red;
         font-size: 0.875rem;
     }

     .valid {
         border-bottom: 2px solid green;
     }

     @media (max-width: 768px) {
         .container {

             padding: 0 15px;
         }

         .form-container {
             padding: 15px;
         }

         .form-control {
             padding-left: 35px;
         }
     }

     .is-invalid {
         border-bottom: 2px solid red !important;
     }

     .is-valid {
         border-bottom: 2px solid green !important;
     }

     .error {
         color: red;
         font-size: 0.875rem;
         margin-top: 5px;
     }

     .readonly {
         pointer-events: none;
         opacity: 0.6;
     }

     .margin-top {
         margin-top: 60px;
     }
 </style>

 <div class="container d-flex justify-content-center align-items-center vh-100">
     <div class="mt-5 w-100">
         <h2 class="text-center text-primary mb-4">Création de bon de restauration</h2>
         <form class="form-container  shadow-sm w-100" action="<?php echo e(route('bon-store')); ?>" method="post" onsubmit="return validateForm()">
             <?php echo csrf_field(); ?>
             <?php echo method_field('POST'); ?>
             <div class="form-group">
                 <label for="price">Valeur</label>
                 <div class="input-group">
                     <span class="input-group-text"><i class=" bon-mdi mdi mdi-cash"></i></span>
                     <input type="number" class="form-control" id="price" placeholder="2000" name="price" required>
                 </div>
             </div>
             <div class="form-group">
                 <label for="quantite">Quantité</label>
                 <div class="input-group">
                     <span class="input-group-text"><i class=" bon-mdi mdi mdi-counter"></i></span>
                     <input type="number" class="form-control" id="quantite" name="quantite" required>
                 </div>
             </div>
             <div class="form-group">
                 <label for="date">Date d'expiration</label>
                 <div class="input-group">
                     <span class="input-group-text"><i class="bon-mdi mdi mdi-calendar"></i></span>
                     <input type="date" class="form-control" id="date" name="date" required>
                 </div>
             </div>
             <div class="text-center">
                 <button type="submit" class="btn btn-primary rounded shadow px-4">Créer <i class="mdi mdi-pencil"></i></button>
             </div>
         </form>
     </div>
 </div>

 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const form = document.querySelector('form');
         const price = document.getElementById('price');
         const quantite = document.getElementById('quantite');
         const date = document.getElementById('date');
         const submitButton = document.querySelector('button[type="submit"]');

         const errorMessages = {
             price: 'Valeur requise',
             quantite: 'champ requis et doit être un entier',
             date: 'Date d\'expiration requise'
         };

         const errorElements = {
             price: createErrorElement(price),
             quantite: createErrorElement(quantite),
             date: createErrorElement(date)
         };

         price.addEventListener('input', validateField);
         quantite.addEventListener('input', validateField);
         date.addEventListener('input', validateField);
         form.addEventListener('submit', validateForm);

         function validateField(event) {
             const field = event.target;
             const value = field.value.trim();
             let isValid = true;

             if (field === quantite || field === price) {
                 isValid = value !== '' && Number.isInteger(Number(value));
             } else {
                 isValid = value !== '';
             }

             if (isValid) {
                 field.classList.remove('is-invalid');
                 field.classList.add('is-valid');
                 errorElements[field.id].textContent = '';
             } else {
                 field.classList.remove('is-valid');
                 field.classList.add('is-invalid');
                 errorElements[field.id].textContent = errorMessages[field.id];
             }

             validateButtonState();
         }

         function validateForm(event) {
             let isValid = true;

             if (!validateFieldAndReturn(price)) isValid = false;
             if (!validateFieldAndReturn(quantite)) isValid = false;
             if (!validateFieldAndReturn(date)) isValid = false;

             if (!isValid) {
                 event.preventDefault();
             }
         }

         function validateFieldAndReturn(field) {
             const value = field.value.trim();
             let isValid = true;

             if (field === quantite) {
                 isValid = value !== '' && Number.isInteger(Number(value));
             } else {
                 isValid = value !== '';
             }

             if (isValid) {
                 field.classList.remove('is-invalid');
                 field.classList.add('is-valid');
                 errorElements[field.id].textContent = '';
             } else {
                 field.classList.remove('is-valid');
                 field.classList.add('is-invalid');
                 errorElements[field.id].textContent = errorMessages[field.id];
             }

             return isValid;
         }

         function validateButtonState() {
             const isFormValid = price.classList.contains('is-valid') &&
                 quantite.classList.contains('is-valid') &&
                 date.classList.contains('is-valid');

             if (isFormValid) {
                 submitButton.classList.remove('readonly');
                 submitButton.classList.remove('btn-danger');
                 submitButton.classList.add('btn-primary');
                 submitButton.disabled = false;
             } else {
                 submitButton.classList.add('readonly');
                 submitButton.classList.add('btn-danger');
                 submitButton.classList.remove('btn-primary');
                 submitButton.disabled = true;
             }
         }

         function createErrorElement(field) {
             const errorElement = document.createElement('div');
             errorElement.className = 'error';
             field.parentNode.appendChild(errorElement);
             return errorElement;
         }
     });
 </script>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/coupons/create.blade.php ENDPATH**/ ?>