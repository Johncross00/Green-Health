<link rel="stylesheet" href="<?php echo e(asset('assets/layouts/css/sidebar.css')); ?>">
<aside class="sidebar close isClose">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="<?php echo e(asset('assets/images/logo.jfif')); ?>" alt="">
            </span>

            <div class="text logo-text">
                <span class="name">BON</span>
                <span class="app-description">Bon de restauration</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu ">
          <!--  <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>-->

            <ul class="menu-links">
                <?php if(Auth::user()): ?>
                    <?php $__currentLoopData = \App\Http\Utils\SidebarUtil::getSidebar(Auth::user()->user_type); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidebar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $side): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="side-link">
                                <a href="<?php echo e(route($side['link'])); ?>">
                                    <i class='<?php echo e($side['box-icon']); ?>'></i>
                                    <span class="text nav-text"><?php echo e($side['link-name']); ?></span>
                                </a>
                            </li>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <!--
                <li class="side-link">
                    <a href="<?php echo e(route('parrains')); ?>">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">parrains</span>
                    </a>
                </li>-->
            </ul>
        </div>

        <div class="bottom-content">
            <?php if(Auth::check()): ?>
            <li class="">
                <a href="<?php echo e(route('logout')); ?>">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <?php endif; ?>

            <li class="mode">
                <div class="sun-moon">
                    <i class='bx bx-moon icon moon'></i>
                    <i class='bx bx-sun icon sun'></i>
                </div>
                <span class="mode-text text">Dark mode</span>

                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</aside>

<script src="<?php echo e(asset('assets/layouts/js/sidebar.js')); ?>"></script>
<?php /**PATH /home/sparqrqm/public_html/bons/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>