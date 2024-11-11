
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["profondeurs"=>null,"relationnels"=>null,"usersbuy"=>0,"counterbon"=>0]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["profondeurs"=>null,"relationnels"=>null,"usersbuy"=>0,"counterbon"=>0]); ?>
<?php foreach (array_filter((["profondeurs"=>null,"relationnels"=>null,"usersbuy"=>0,"counterbon"=>0]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="row">
    
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card bg-dark">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">
                      <?php
                          
                          echo $profondeurs;
                      ?>
                  </h3>
                  
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Nombre de niveau actuel</h6>
          </div>
        </div>
      </div>


      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card bg-dark">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">
                      <?php
                          
                          echo $relationnels->count();
                      ?>
                  </h3>
                  
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Mon relationnel</h6>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card bg-dark">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">
                      <?php
                        //   $count = Auth::user()->transactions->sum('quantite');
                          echo $usersbuy;
                      ?>
                  </h3>
                  
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Utilisateurs ayant acheté dans mon relationnel.</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card bg-dark">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">
                      <?php
                        //   $count = Auth::user()->transactions->sum('quantite');
                          echo $counterbon;
                      ?>
                  </h3>
                  
                  <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Bons achetés dans mon relationnel</h6>
          </div>
        </div>
      </div>


    </div>    <?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/components/relationnel.blade.php ENDPATH**/ ?>