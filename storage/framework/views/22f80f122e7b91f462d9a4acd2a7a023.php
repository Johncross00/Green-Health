<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(["valeur"=>null,"size"=>80,"ftSize"=>null,"fvSize"=>null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(["valeur"=>null,"size"=>80,"ftSize"=>null,"fvSize"=>null]); ?>
<?php foreach (array_filter((["valeur"=>null,"size"=>80,"ftSize"=>null,"fvSize"=>null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<style>
  .coin-container {
    display: flex;
    justify-content: center;
    align-items: center;
    /* width: <?php echo e($size); ?>px;
    height: <?php echo e($size); ?>px; */
  }

  .coin {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #E5A01D;
    position: relative;
  }

  .coin svg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .center-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: <?php echo e($ftSize); ?>px;
    font-weight: bold;
    line-height: 1.2;
    color: #096A09;
  }

  .coin .value {
    display: block;
    font-size: <?php echo e($fvSize); ?>px;
    color: #096A09;
  }
</style>




  <div class="coin-container" style="width: <?php echo e($size); ?>;
  height:<?php echo e($size); ?>;">
    <div class="coin">
      <svg viewBox="0 0 100 100">
        <path id="curve" d="M 50, 50 m -45, 0 a 45,45 0 1,1 90,0 a 45,45 0 1,1 -90,0" fill="transparent"/>
        <text width="100">
          <textPath href="#curve" startOffset="0%" text-anchor="middle" font-size="6" font-family="Arial" letter-spacing="1px">
            Green detox &bull;
             Green detox &bull; 
             Green detox &bull; 
             Green detox &bull;
             Green detox &bull;
             Green detox &bull; 
             Green detox &bull; 
             Green detox &bull;
             Green detox &bull;
             Green detox &bull; 
             Green detox &bull;
             Green detox &bull; 
             Green detox &bull; 
             Green detox &bull;
             Green detox &bull;
             Green detox &bull; 
             Green detox &bull; 
             Green detox &bull;
          </textPath>
        </text>
      </svg>
      <div class="center-text" style="font-size: <?php echo e($ftSize); ?>;">
        <span>Gr<span style="color:red;">ee</span>n</span><br>
        <span class="value" style="<?php echo e($fvSize); ?>;"><?php echo e($valeur); ?></span>
      </div>
    </div>
  </div>

<?php /**PATH /home/vrtvjmeg/public_html/resources/views/components/jeton.blade.php ENDPATH**/ ?>