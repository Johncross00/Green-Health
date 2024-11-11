<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','Validation'); ?>
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
    .side-container-bg{
        background:rgba(245,251,252,1);
    }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 500px;
            height: 100vh;
        }

        .form-box {
            border: none;
            outline: none;
            width: 100%;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-label {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: rgb(0, 157, 255);
            border-color: rgb(0, 51, 255);
            margin-top: 20px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #379ad4;
            border-color: #37d4d4;
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

        .readonly {
            pointer-events: none;
            opacity: 0.6;
        }

        .form-group {
            position: relative;
            margin-bottom: 1rem;
        }

       

        .form-control {
            padding-left: 2.5rem;
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

    .form-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .mdi-v {
        position: absolute;
        top: 35px;
        left: -8px;
        font-size: 1.2rem;
    }

    .form-control {
            padding-left: 40px;
            border: none;
            border-bottom: 2px solid rgb(108, 108, 114);
            border-radius: 0;
            transition: border-color 0.3s;
            outline: none;
        }
        </style>
</head>

<body>
    <div class="container form-container">
        <div class="form-box">
            <form id="myForm" action="<?php echo e(route('trans-store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("POST"); ?>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <h4>Créer une transaction ici</h4>
                </div>

                <div class="form-group">
                    <label for="user_code" class="form-label">Code d'utilisateur</label>
                    <i class=" text-success mdi-v mdi mdi-account"></i>
                    <input type="text" class="form-control" id="user_code" name="user_code" required>
                    <div class="error" id="user_code-error"></div>
                </div>

                <div class="form-group">
                    <label for="coupon_code" class="form-label">Code du Coupon</label>
                    <i class="mdi mdi-v text-danger mdi-ticket-percent"></i>
                    <select class="form-control" id="coupon_code" name="coupon_price" required>
                        <option value="" disabled selected>Selectionnez coupon par son prix..</option>
                        <?php if(isset($coupons)): ?>
                        <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($coupon->price); ?>"><?php echo e($coupon->price); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <div class="error" id="coupon_code-error"></div>
                </div>

                <div class="form-group">
                    <label for="quantite" class="form-label">Quantité</label>
                    <i class="mdi mdi-v text-primary mdi-cube-outline"></i>
                    <input type="number" step="0.01" class="form-control" id="quantite" name="quantite" value="0" required>
                    <div class="error" id="qte-error"></div>
                </div>

                <div class="form-group">
                    <label for="percent " class="form-label">Gain pourcent(%)</label>
                    <i class="mdi mdi-v text-info mdi-percent"></i>
                    <input type="number" step="0.01" class="form-control" id="percent" value="0" name="percent" required>
                    <div class="error" id="percent-error"></div>
                </div>

                <button type="submit" class="btn btn-primary" id="submitBtn">Lancer la transaction</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const userCode = document.getElementById('user_code');
    const couponCode = document.getElementById('coupon_code');
    const quantite = document.getElementById('quantite');
    const percent = document.getElementById('percent');
    const submitButton = document.getElementById('submitBtn');

    const errorMessages = {
        user_code: "Veuillez entrer le code d'utilisateur",
        coupon_code: 'Veuillez sélectionner un coupon',
        quantite: 'Quantité requise et doit être un nombre',
        percent: 'Pourcentage requis et doit être un nombre'
    };

    const errorElements = {
        user_code: document.getElementById('user_code-error'),
        coupon_code: document.getElementById('coupon_code-error'),
        quantite: document.getElementById('qte-error'),
        percent: document.getElementById('percent-error')
    };

    userCode.addEventListener('input', validateField);
    couponCode.addEventListener('input', validateField);
    quantite.addEventListener('input', validateField);
    percent.addEventListener('input', validateField);
    form.addEventListener('submit', validateForm);

    function validateField(event) {
        const field = event.target;
        const value = field.value.trim();
        let isValid = true;

        if (field === quantite || field === percent) {
            isValid = value !== '' && !isNaN(value);
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

        if (!validateFieldAndReturn(userCode)) isValid = false;
        if (!validateFieldAndReturn(couponCode)) isValid = false;
        if (!validateFieldAndReturn(quantite)) isValid = false;
        if (!validateFieldAndReturn(percent)) isValid = false;

        if (!isValid) {
            event.preventDefault();
        }
    }

    function validateFieldAndReturn(field) {
        const value = field.value.trim();
        let isValid = true;

        if (field === quantite || field === percent) {
            isValid = value !== '' && !isNaN(value);
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
        const isFormValid = userCode.classList.contains('is-valid') &&
                            couponCode.classList.contains('is-valid') &&
                            quantite.classList.contains('is-valid') &&
                            percent.classList.contains('is-valid');

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
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sparqrqm/public_html/bons/resources/views/admin/valid-bon.blade.php ENDPATH**/ ?>