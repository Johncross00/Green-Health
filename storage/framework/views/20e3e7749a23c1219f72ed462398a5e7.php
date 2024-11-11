 
<nav class="navbar p-0 fixed-top d-flex flex-row" style="background:rgb(208, 225, 231);">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center navbar-brand-new" style="background: rgb(208, 225, 231)">
        <a class="navbar-brand brand-logo-mini" href="<?php echo e(route('home')); ?>">
            <img class=" w-50 h-50 shadow-lg rounded-circle" src="<?php echo e(asset('assets/images/logo-bonr.png')); ?>" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control text-black border-0 bg-white" placeholder="Rechercher..">
                </form>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <?php if(Auth::user()->user_type==='admin'): ?>
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false">
                    + Creation..
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                    <h6 class="p-3 mb-0">Administration</h6>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?php echo e(route('bon-create')); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-cash text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Bon de restauration</p>
                        </div>
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?php echo e(route('sign-up')); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-account-plus text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Nouveau compte client</p>
                        </div>
                    </a>
                    
                    
                
                </div>
            </li>
            <?php endif; ?>
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link">
                    <i class="mdi mdi-view-grid"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                </a>
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" data-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                </a>
                
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="<?php echo e(asset('assets/images/logo.jpg')); ?>" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name text-black"><?php echo e(Auth::user()->pseudo); ?></p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?php echo e(route('settings')); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Parametre</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="<?php echo e(route('logout')); ?>">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-logout text-danger"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject mb-1">Se deconnecter</p>
                        </div>
                    </a>
                    
                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
        </button>
    </div>
</nav>




<?php /**PATH C:\Laravel\35-Sant--main\resources\views/components/navbar.blade.php ENDPATH**/ ?>