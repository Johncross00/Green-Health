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
<style>
   .side-container-bg {
            background: rgba(245, 251, 252, 1);
        } .sidebar-bg{
        background:rgba(245,251,252,1);
    }
    .margin-top{
        margin-top: 65px;
    }
    
    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
  .login-card {
    
      width: 100%;
      max-width: 400px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      background: rgb(245, 248, 250);
      border-radius: 8px;
  }
  .login-header {
      text-align: center;
      margin-bottom: 20px;
      color: #007bff;
  }
  .form-group {
      position: relative;
      margin-bottom: 1.5rem;
  }
  .form-group .mdi {
      position: absolute;
      left: 6px;
      top: 50%;
      transform: translateY(-50%);
      color: #007bff;
  }
 
  .form-control {
      padding-left: 40px;
      border: none;
      border-bottom: 2px solid #007bff;
      border-radius: 0;
      transition: border-color 0.3s;
  }
  .form-control:focus {
      box-shadow: none;
      border-color: #0056b3;
  }
  .login-footer {
      text-align: center;
      margin-top: 20px;
  }
  .image {
    display: flex;
    justify-content: center;
    align-items: center;
}

.image img {
    width: 100px;
    height: 100px;
    animation: rotate 5s linear infinite;
}
input{
    background:white;
    color:black;
}
@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
.error {
            color: red;
        }
</style>
<?php $__env->startSection('sidebar-container'); ?>
<?php 
if(Auth::check())
{
    $user=Auth::user();
}
?>
<div class="w-100  side-container-bg">
    <div class="login-container d-flex justify-center justify-content-center align-content-center align-items-center">
        <div class="login-card">
            
            <div class="image">
              <img src="<?php echo e(asset('assets/images/logo-bonr.png')); ?>" alt="bon">
            </div>
            <h3 class="login-header">Modification du mot de passe</h3>
            <form method="post" action="<?php echo e(route('post_update')); ?>" id="updateForm">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="form-group">
                    <i class="mdi mdi-account text-primary"></i>
                    <input type="email" class="form-control text-center" value="<?php echo e($user['email']); ?>" name="email" id="email" required readonly>
                </div>
                <div class="form-group">
                    <i class="mdi mdi-lock text-primary"></i>
                    <input type="password" class="form-control text-center" name="password" id="password" placeholder="nouveau mot de passe" required>
                </div>
                <div class="form-group">
                    <i class="mdi mdi-lock text-primary"></i>
                    <input type="password" class="form-control text-center" id="confirm" placeholder="confirmation du mot de passe" name="confirm" required>
                </div>
                <div id="error-message" class="error"></div>
                <button type="submit" class="btn btn-primary btn-block submiting w-100">Modifier</button>
            </form>
          
        </div>
      </div>
      
</div>
<script>
    document.getElementById('updateForm').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirm = document.getElementById('confirm').value;
        var errorMessage = document.getElementById('error-message');
        errorMessage.textContent = ''; // Clear previous error messages

        if (password.length < 8) {
            errorMessage.textContent = 'Le mot de passe doit contenir au moins 8 caractères.';
            event.preventDefault(); // Prevent form submission
        } else if (password !== confirm) {
            errorMessage.textContent = 'Les mots de passe ne correspondent pas.';
            event.preventDefault(); // Prevent form submission
        }
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/authentification/update_password.blade.php ENDPATH**/ ?>