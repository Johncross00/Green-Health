<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card bg-dark">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">
                    <?php
                        $count = Auth::user()->transactions->sum('quantite');
                        echo $count;
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
          <h6 class="text-muted font-weight-normal">Bons validés</h6>
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
                        use Carbon\Carbon;
                
                        $use = 0;
                        $now = Carbon::now();
                
                        if (Auth::user()->transactions->count()) {
                            foreach (Auth::user()->transactions as $trans) {
                                if (Carbon::parse($trans->bon->date)->lt($now)) {
                                    $use += 1;
                                }
                            }
                        }
                
                        echo $use;
                    ?>
                </h3>
                
                <p class="text-success ml-2 mb-0 font-weight-medium">-0</p>
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-arrow-top-right icon-item"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Bons utilisés</h6>
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
  <?php /**PATH /home/sparqrqm/public_html/bons/resources/views/components/client-dashboard.blade.php ENDPATH**/ ?>