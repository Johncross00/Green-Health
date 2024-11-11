<?php $__env->startSection('title','Nouveau mot de passe'); ?>
<?php $__env->startSection('body-container'); ?>
<link 
rel="stylesheet" 
href="<?php echo e(asset('assets/vendor/vendors/mdi/css/materialdesignicons.min.css')); ?>?v=<?php echo time(); ?> ">

<style>
        
   
  
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
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #007bff;
  }
  a{
    text-decoration: none;
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
.invalid{
    border:1px solid red;
}
.valid{
    border:1px solid green;
}


</style>
<div class="login-container d-flex justify-center justify-content-center align-content-center align-items-center">
  <div class="login-card">
      
      <div class="image">
        <img src="<?php echo e(asset('assets/images/logo-bonr.png')); ?>" alt="bon">
      </div>
      <h3 class="login-header">Réinitialiser le mot de passe</h3>
      <form  method="post" action="<?php echo e(route('password.reset')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
          <div class="form-group">
              <i class="mdi mdi-lock text-primary"></i>
              <?php
               $email = session('email');
               ?>

              <input type="text" class="form-control" value="<?php echo e($email ?? old('email')); ?>" name="email" id="email" hidden readonly>
              <input type="text" class="form-control" name="password" id="password"
              placeholder="password" required>
          </div>
          <div class="form-group">
            <i class="mdi mdi-lock text-primary"></i>
            <input type="text" class="form-control" name="confirm" id="confirm"
            placeholder="confirmation" required>
        </div>
          <button type="submit" class="btn btn-primary btn-block submiting w-100">Réinitialiser</button>
      </form>
   
  </div>
</div>

    

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sparqrqm/public_html/bons/resources/views/authentification/password.blade.php ENDPATH**/ ?>