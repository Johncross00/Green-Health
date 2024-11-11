    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['clients'=>null,'qteV'=>0,"ventes"=>0,"counts"=>0,'qteT'=>0,'coupons'=>null,
    'profondeurs'=>null,'relationnels'=>null,'usersbuy'=>0,'counterbon'=>0]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['clients'=>null,'qteV'=>0,"ventes"=>0,"counts"=>0,'qteT'=>0,'coupons'=>null,
    'profondeurs'=>null,'relationnels'=>null,'usersbuy'=>0,'counterbon'=>0]); ?>
<?php foreach (array_filter((['clients'=>null,'qteV'=>0,"ventes"=>0,"counts"=>0,'qteT'=>0,'coupons'=>null,
    'profondeurs'=>null,'relationnels'=>null,'usersbuy'=>0,'counterbon'=>0]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
                              <h3 class="mb-0"><?php echo e($clients->count()); ?></h3>
                              <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success ">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Clients inscrits</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-dark">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0"><?php echo e($counts); ?></h3>
                              <p class="text-success ml-2 mb-0 font-weight-medium">++</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Nouveaux clients</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-dark">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0"><?php echo e(Auth::user()->referrals->count()); ?></h3>
                              <p class="text-danger ml-2 mb-0 font-weight-medium">-0</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-danger">
                              <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Relationnel direct</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                    <div class="card bg-dark">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                              <h3 class="mb-0"><?php echo e(Auth::user()->balance); ?></h3>
                              <p class="text-success ml-2 mb-0 font-weight-medium">+0F</p>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="icon icon-box-success ">
                              <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                          </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Solde courant</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="my-2">
                  <?php if (isset($component)) { $__componentOriginald9fb51341efdd332de3b82f5e347ca00 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9fb51341efdd332de3b82f5e347ca00 = $attributes; } ?>
<?php $component = App\View\Components\Relationnel::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('relationnel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Relationnel::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['profondeurs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($profondeurs),'relationnels' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($relationnels),'counterbon' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($counterbon),'usersbuy' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($usersbuy)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9fb51341efdd332de3b82f5e347ca00)): ?>
<?php $attributes = $__attributesOriginald9fb51341efdd332de3b82f5e347ca00; ?>
<?php unset($__attributesOriginald9fb51341efdd332de3b82f5e347ca00); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9fb51341efdd332de3b82f5e347ca00)): ?>
<?php $component = $__componentOriginald9fb51341efdd332de3b82f5e347ca00; ?>
<?php unset($__componentOriginald9fb51341efdd332de3b82f5e347ca00); ?>
<?php endif; ?>
              </div>
                <div class="row ">
                  <div class="col-sm-4 grid-margin">
                    <div class="card bg-dark">
                      <div class="card-body bg-dark">
                        <h5>Quantité de bons vendus</h5>
                        <div class="row">
                          <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0"><?php echo e($qteV); ?></h2>
                              <p class="text-success ml-2 mb-0 font-weight-medium">+0</p>
                            </div>
                            <h6 class="text-muted font-weight-normal"></h6>
                          </div>
                          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                  <div class="col-sm-4 grid-margin">
                    <div class="card bg-dark">
                      <div class="card-body">
                        <h5>Ventes</h5>
                        <div class="row bg-dark">
                          <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0"><?php echo e($ventes); ?> Fcfa</h2>
                              <p class="text-success ml-2 mb-0 font-weight-medium">+0F</p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> </h6>
                          </div>
                          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 grid-margin">
                    <div class="card bg-dark">
                      <div class="card-body">
                        <h5>Bons disponibles</h5>
                        <div class="row ">
                          <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                              <h2 class="mb-0"><?php echo e($qteT); ?></h2>
                              <p class="text-danger ml-2 mb-0 font-weight-medium">-0 </p>
                            </div>
                            <h6 class="text-muted font-weight-normal"></h6>
                          </div>
                          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <?php if (isset($component)) { $__componentOriginal21af23c69e7a4c1905c85dd28f2e502c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21af23c69e7a4c1905c85dd28f2e502c = $attributes; } ?>
<?php $component = App\View\Components\CouponList::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('coupon-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CouponList::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['coupons' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($coupons),'class' => 'bg-dark']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21af23c69e7a4c1905c85dd28f2e502c)): ?>
<?php $attributes = $__attributesOriginal21af23c69e7a4c1905c85dd28f2e502c; ?>
<?php unset($__attributesOriginal21af23c69e7a4c1905c85dd28f2e502c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21af23c69e7a4c1905c85dd28f2e502c)): ?>
<?php $component = $__componentOriginal21af23c69e7a4c1905c85dd28f2e502c; ?>
<?php unset($__componentOriginal21af23c69e7a4c1905c85dd28f2e502c); ?>
<?php endif; ?>
                <div class="row bg-dark">
                    <div class="col-12 grid-margin bg-dark">
                      <div class="card bg-dark">
                        <div class="card-body bg-dark">
                          <h4 class="card-title"> Status des clients </h4>
                          <div class="table-responsive bg-dark">
                            <table class="table bg-dark">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check form-check-muted m-0">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                      </label>
                                    </div>
                                  </th>
                                  <th> Nom </th>
                                  <th> Ville </th>
                                  <th> Quartier </th>
                                  <th> email </th>
                                  <th> Reseau de payment </th>
                                  <th> Numero du reseau </th>
                                  <th> Numero whatsapp </th>
                                  <th> Quantité de bons validés </th>
                                  <th> Status </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php if(isset($coupons)): ?>
                                <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($coupon->transactions)): ?>
                                <?php $__currentLoopData = $coupon->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-muted m-0">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input bg-white text-white">
                                      </label>
                                    </div>
                                  </td>
                                  <td>
                                    <img src="<?php echo e(asset('assets/images/logo.jpg')); ?>" alt="image" />
                                    <span class="pl-2"><?php echo e($trans->user['nom']); ?></span>
                                  </td>
                                  <td> <?php echo e($trans->user['ville']); ?> </td>
                                  <td> <?php echo e($trans->user['quartier']); ?></td>
                                  <td> <?php echo e($trans->user['email']); ?> </td>
                                  
                                    <td>
                                     
                                      <?php if($trans->user['reseau1']): ?>
                                          <?php echo e($trans->user['reseau1']); ?>

                                      <?php else: ?>
                                          <?php echo e($trans->user['reseau2']); ?>

                                      <?php endif; ?>
                                  </td>
                                  
                                 <td> <?php echo e($trans->user['numero_reseau']); ?></td>
                             <td> <?php echo e($trans->user['numwhats']); ?></td>
                             <td> <?php echo e($trans['quantite']); ?></td>
                                  <td>
                                    <div class="badge badge-outline-success">Payé</div>
                                  </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                

                <style>
                    .table{
                        background:rgba(0,0,0,0.02);
                    }
                </style><?php /**PATH C:\Users\PAVILION\Pictures\Samsung Flow\archive\public_html\resources\views/components/dashboard-container.blade.php ENDPATH**/ ?>