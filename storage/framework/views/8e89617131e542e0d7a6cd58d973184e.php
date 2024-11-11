<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title','Generation du lien'); ?>
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
    .header-gen {
      padding: 20px;
      background-color: rgba(245, 251, 252, 1);
      box-shadow:0 0 10px rgba(0,0,2,0.1);
      border-bottom: 1px solid #dee2e6;
    }
    .form-select {
      width: 100%;
    }
    @media (max-width: 768px) {
      .phone-screen {
        display: flex;
        flex-direction:column;
      }

      .copy-link-container {
        position: relative;
        top: -10px;
        right: -10px;
        width: 100%;
        justify-content: center;
        margin-bottom: 10px;
      }
      .readonly-input {
        width: 100%;
      }
    }
    .copy-link-container {
      position: absolute;
      top: -20px;
      right: -20px;
      display: flex;
      align-items: center;
    }
    .readonly-input {
      margin-right: 5px;
      padding: 5px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      width: 250px;
    }
  

.card {
    position:relative;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* max-width: 220px; */
    padding: 30px;
    text-align: center;
    border:none;
   
    border-bottom-right-radius:40%;
}
.icon{
    position:absolute;
    left: 0;
    right:0;
    transform:translateY(-70px);
    
}

.icon {
    background-color: rgba(245,251,252,1);
    border-radius: 50%;
    padding: 20px;
    width: 65px;
    height: 65px;
    margin: 0 auto 20px;
    display: flex;
    justify-content: center;
    align-items: center;
   
}
.wht{
  border-radius:50%;
  padding:25px;
    display: flex;
    justify-content: center;
    align-items: center;
    background:#fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height:40px;
    width:40px;
    
    text-align:center;
    
}

 img {
    text-align:center;
    width: 40px;
    height: 40px;
    border-radius:50%;
    text-align:center;
}

.content h1 {
    font-size: 18px;
    color: #333;
    margin-bottom: 10px;
}

.content p {
    font-size: 14px;
    color: #777;
}
.margin-top{
  margin-top:100px;
}
    </style>
 
  <div class="w-100 side-container-bg position-relative  margin-top ">
    <?php if(session('link')): ?>
    <div class="copy-link-container">
      <input type="text" class="readonly-input" value="<?php echo e(session('link')); ?>" readonly>
      <button class="btn btn-outline-secondary" onclick="copyLink(this)">
        <i class="mdi mdi-content-copy"></i>
      </button>
     
    </div>
    <?php endif; ?>
    <div class="d-flex justify-content-center align-items-center header-gen w-100">
      <div class="d-flex justify-content-between phone-screen w-100">
        <div class="form d-flex flex-column">
          <p id="copyMessage" class="text-success fw-5">Lien copié dans la presse papier.</p>
         <form class="d-flex-flex-column" action="<?php echo e(route('generate-link')); ?>" method="post">
          <?php echo method_field('POST'); ?>
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <select class="form-select" name="time_expire">
              <option disabled value="">Choisissez le temps d'expiration de votre lien</option>
              <option value="24h">24heure par defaut</option>
              <option value="1week">1 Semaine</option>
              <option value="1month">1 Mois</option>
            </select>
          </div>
          <div class="mb-3">
            <button class="px-4 mx-4 btn btn-primary border-none rounded shadow" type="submit">Générer</button>
          </div>
        </form>
        </div>
        <div class="hero-gen mx-2">
          <p>Veuillez générer un lien et le copier pour partager sur vos canaux de communication entre vos amis.</p>
        </div>
      </div>
    </div>
    <div class="mt-5 d-flex justify-content-center align-items-center w-100">
    <div class="row row-cols-1 row-cols-md-4 g-2 w-100">
 <div class="col">
    <div class="card">
        <div class="icon text-center">
        <div class="wht rounded-circle">
            <img class="image-ronde text-center" src="<?php echo e(asset('assets/images/logo-bonr.png')); ?>" alt="Icon">
        </div>
         
        </div>
        <div class="content">
            <h1>1.GREENDETOX</h1>
            <p>Devenez des proches et amis dans le relationnel de GREENDETOX..</p>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <div class="icon text-center">
        <div class="wht rounded-circle">
            <img class="image-ronde text-center" src="<?php echo e(asset('assets/images/image-v.png')); ?>" alt="Icon">
        </div>
         
        </div>
        <div class="content">
            <h1>2.FAMILLE</h1>
            <p>Forme avec tes freres ou amis  une famille sur GREENDETOX..</p>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <div class="icon text-center">
        <div class="wht rounded-circle">
            <img class="image-ronde text-center" src="<?php echo e(asset('assets/images/bon.png')); ?>" alt="Icon">
        </div>
         
        </div>
        <div class="content">
            <h1>3.REVENUE</h1>
            <p>Gagnez de l'argent sur GREENDETOX ? Oui c'est possible ...</p>
        </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
        <div class="icon text-center">
        <div class="wht rounded-circle">
            <img class="image-ronde text-center" src="<?php echo e(asset('assets/images/herogen.png')); ?>" alt="Icon">
        </div>
         
        </div>
        <div class="content">
            <h1>4.LIEN SOLIDE</h1>
            <p>Avec GREENDETOX, une communauté solide et épanoui... </p>
        </div>
    </div>
  </div>
  </div>
    </div>
  </div>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const copyMessage = document.getElementById('copyMessage');
        if (copyMessage) {
            copyMessage.style.display = 'none';
            copyMessage.style.color = 'green';
        }
    
        window.copyLink = function(icon) {
            const linkInput = icon.previousElementSibling;
            if (linkInput && linkInput.select && document.execCommand) {
                linkInput.select();
                linkInput.setSelectionRange(0, 99999); 
    
                try {
                    document.execCommand('copy');
                    if (copyMessage) {
                        copyMessage.style.display = 'block';
                        setTimeout(() => {
                            copyMessage.style.display = 'none';
                        }, 2000);
                    }
                } catch (err) {
                    console.error('Unable to copy', err);
                }
            } else if (navigator.clipboard) {
                navigator.clipboard.writeText(linkInput.value).then(() => {
                    if (copyMessage) {
                        copyMessage.style.display = 'block';
                        setTimeout(() => {
                            copyMessage.style.display = 'none';
                        }, 2000);
                    }
                }).catch(err => {
                    console.error('Unable to copy', err);
                });
            }
        };
    });
    </script>
    
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/codes/generate.blade.php ENDPATH**/ ?>