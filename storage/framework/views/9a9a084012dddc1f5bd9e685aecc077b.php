<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','Ravitaillement'); ?>
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

    .container {
            max-width: 600px;
        }
        .form-control {
            padding-left: 40px;
            border: none;
            border-bottom: 2px solid rgb(108, 108, 114);
            border-radius: 0;
            transition: border-color 0.3s;
            outline: none;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: rgb(0, 81, 255);
            border-color: blue;
            margin-top: 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #3778d4;
            border-color: #3792d4;
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

        .error {
            color: red;
            font-size: 0.875rem;
            margin-top: 5px;
        }

        .is-invalid {
            border-bottom: 2px solid red !important;
        }

        .is-valid {
            border-bottom: 2px solid green !important;
        }
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }

        .readonly {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="mt-5 w-100">
            <h4 class="text-primary text-center mb-4">Ravitailler un bon ici</h4>
            <form id="myForm w-100" class="form-container" action="<?php echo e(route('bon-ravita')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("POST"); ?>
                <div class=" form-group mb-3">
                    <label for="coupon_code" class="form-label">Prix du Coupon</label>
                    <select class="form-control" id="coupon_code" name="coupon_price" required>
                        <option disabled selected>Selectionnez coupon par son prix</option>
                        <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option id="<?php echo e($coupon->id); ?>" value="<?php echo e($coupon->price); ?>"><?php echo e($coupon->price); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="error" id="coupon_code-error"></div>
                </div>

                <div class="form-group mb-3">
                    <label for="quantite" class="form-label">Quantité</label>
                    <input type="number" class="form-control" id="quantite" name="quantite" required>
                    <div class="error" id="qte-error"></div>
                </div>

                <button type="submit" class="btn btn-primary px-4 rounded" id="submitBtn">Ravitailler</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const couponCode = document.getElementById('coupon_code');
    const quantite = document.getElementById('quantite');
    const submitButton = document.getElementById('submitBtn');

    const errorMessages = {
        coupon_code: 'Veuillez sélectionner un coupon',
        quantite: 'Quantité requise et doit être un entier'
    };

    const errorElements = {
        coupon_code: document.getElementById('coupon_code-error'),
        quantite: document.getElementById('qte-error')
    };

    couponCode.addEventListener('input', validateField);
    quantite.addEventListener('input', validateField);
    form.addEventListener('submit', validateForm);

    function validateField(event) {
        const field = event.target;
       
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

        validateButtonState();
    }

    function validateForm(event) {
        let isValid = true;

        if (!validateFieldAndReturn(couponCode)) isValid = false;
        if (!validateFieldAndReturn(quantite)) isValid = false;

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
        const isFormValid = couponCode.classList.contains('is-valid') &&
                            quantite.classList.contains('is-valid');


                           

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
});
</script>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/coupons/ravitailler.blade.php ENDPATH**/ ?>