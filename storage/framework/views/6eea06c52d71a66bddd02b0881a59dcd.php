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
                background: linear-gradient(to bottom right, #fff9c4, #fff59d);
            
            }
            .form-container {
                background-color: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(10px);
                border-radius: 15px;
                border: 2px solid #ffd54f;
                padding: 2rem;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                width: 100%;
            }
            .form-title {
                color: #f57f17;
                font-weight: bold;
                margin-bottom: 1.5rem;
            }
            .form-label {
                color: #f57f17;
            }
            .form-control:focus {
                border-color: #ffd54f;
                box-shadow: 0 0 0 0.2rem rgba(255, 213, 79, 0.25);
            }
            .btn-primary {
                background-color: #f57f17;
                border-color: #f57f17;
            }
            .btn-primary:hover, .btn-primary:focus {
                background-color: #e65100;
                border-color: #e65100;
            }
            .invalid-feedback {
                color: #e65100;
            }
        </style>
   
   
   
    



<div class="side-container-bg d-flex justify-content-center align-items-center vh-100">
      
    
        <div class="form-container">
            <h2 class="form-title text-center">Confirmation du numéro de reseau (Flooz/Tmoney)</h2>
            <form id="phoneConfirmationForm" action="<?php echo e(route('reseau-number')); ?>" method="POST">
                <?php echo method_field('POST'); ?>
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Numéro de réseau
                        <?php echo e(Auth::user()->numero_reseau); ?>

                    </label>
                    <input type="tel" class="form-control" name="reseau" id="phoneNumber" required>
                   
                </div>
              
                <button type="submit" class="btn btn-primary w-100" id="submitButton">
                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true" style="display: none;"></span>
                    <span class="button-text">Confirmer</span>
                </button>
            </form>
        </div>
    
   
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('phoneConfirmationForm');
    const submitButton = document.getElementById('submitButton');
    const spinner = submitButton.querySelector('.spinner-border');
    const phone = document.getElementById('phoneNumber');
    const buttonText = submitButton.querySelector('.button-text');

    form.addEventListener('submit', function(event) {
      
        if (phone.value === '' || phone.value.length < 6) {
            event.preventDefault();
            event.stopPropagation();
            submitButton.disabled = false;
        } else {
         
            spinner.style.display = 'inline-block';
            buttonText.textContent = 'Confirmation en cours...';
            submitButton.disabled = true; 
        }
    });
});

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\35-Sant--main\resources\views/layouts/reseau_form.blade.php ENDPATH**/ ?>