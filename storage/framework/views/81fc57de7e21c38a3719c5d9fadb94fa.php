<?php echo $__env->make('layouts.dash-head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title', 'Parametre'); ?>
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

    <?php if(Auth::check()): ?>
        <?php
            $user = Auth::user();
            //  dd($user->referrals);
            if (isset($clients) && $clients->count()) {
                $percent = ($clients->count() * 100) / $clients->count();
                $user_percent = ($user->referrals->count() * 100) / $clients->count();

                // Limiter à 4 chiffres après la virgule
                $user_percent = number_format($user_percent, 4);
            }

        ?>
        <style>
            .side-container-bg {
                background: 'table-dark-bg'
            }

            body {

                font-weight: 30px;


            }

            .setting {
                --percentage: <?php echo e($user_percent); ?>%;



            }

            .table,
            th,
            td {
                border: none;
                font-weight: 20px;
            }

            .table tr th {
                border: none;
            }

            .table tr td {
                border: none;
            }

            .card {
                padding: 10px;
                color: white;
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            }

            .card-header {
                border: none;
                color: white;
            }

            .card-footer {
                border: none;
                color: white;
            }

            .email-valid {
                float: right;
            }

            .progress-circle {
                position: relative;
                width: 111px;
                height: 111px;
                border-radius: 50%;
                background: conic-gradient(rgb(30, 96, 17) 0% calc(var(--percentage)), #e0e0e0 calc(var(--percentage)) 100%);
                display: flex;
                justify-content: center;
                align-items: center;
            }


            .progress-text {
                position: absolute;
                font-size: 24px;
                font-weight: bold;
                color: #333;
            }

            .progress-subtext {
                position: absolute;
                font-size: 16px;
                top: 65%;
                color: #666;
            }

            .mdi-wifi {
                color: blue;
                font-weight: 90px;
                size: 90px;

            }

            input {
                border: none;
                border-bottom: 1px solid green;
                outline: none;
                box-shadow: 2px 2px 10px black;
            }

            .mobile-data {
                width: 30px;
                height: 30px;
                color: #fff;
            }

            .wallet {

                height: 45px;

                display: flex;
                justify-content: center;
                align-items: center;

            }

            .btn-green {
                color: #fff;
                background: rgb(30, 96, 17);
            }

            .wallet span {
                text-align: center;
            }

            .carte {
                background: #2fa2af;
                font-size: 12px;
                color: #fff;
            }

            .puce {
                width: 60px;
                height: 60px;
                color: white;
            }

            .carte-valeur {
                float: right;
            }

            .top-0 {
                top: 0;
                transform: translateY(-10px);
            }

            .right-0 {
                right: -10px;

            }

            .margin-top {
                margin-top: 65px;
            }

            table {
                background: black;
                color: white;
            }

            .wallet span {
                color: black;
            }

            input {

                color: black;
            }

            h4 {
                font-size: 13px;
            }

            td {
                color: white;
            }

            .btn-green-mdi {
                color: rgb(30, 96, 17);
            }

            .table-dark-bg th,
            .table-dark-bg td {
                background-color: #07121e !important;
                /* table-dark-bg */
                color: #fff !important;
                /* text-white */
            }

            .table-dark-bg {
                background-color: #07121e !important;
                /* table-dark-bg */
                !important;
                /* table-dark-bg */
                color: #fff !important;
                /* text-white */
            }


            /* Tree branch*/
            .tree {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .level {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .node {
                border: 2px solid #333;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px;
                position: relative;
            }

            .node.main {
                background-color: #FFA500;
                /* Couleur pour le parent principal */
            }

            .node::before,
            .node::after {
                content: '';
                position: absolute;
                top: 50%;
                background-color: #333;
            }

            .node::before {
                left: -20px;
            }

            .node::after {
                right: -20px;
            }

            .node:first-child::before,
            .node:last-child::after {
                display: none;
            }

            .node.split {
                background: linear-gradient(to right, #FFA500 50%, #FFFFFF 50%);
            }
        </style>

        <div class="setting  d-flex flex-column table-dark-bg w-100 margin-top">
            <div class="row g-0">
                <div class="col-md-9 table-dark-bg">
                    <div
                        class="card h-100 rounded-l-xl shadow-sm transition-shadow hover:shadow-lg table-dark-bg text-white border-0 shadow h-100">
                        <div class="card-header">
                            <h4 class="text-center">Informations personnelles</h4>
                        </div>
                        <div class="card-body table-dark-bg">
                            <div class="table-responsive">
                                <table class="table table-dark-bg">
                                    <thead class="table-dark-bg">
                                        <tr class="table-dark-bg">
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Pseudo</th>
                                            <th>Email</th>
                                            <th>Ville</th>
                                            <th>Commune</th>
                                            <th>Quartier</th>
                                            <th>R.choisi</th>
                                            <th>N.réseau</th>
                                            <th>N.Whatsapp</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-dark-bg">
                                        <tr class="table-dark-bg">
                                            <td><?php echo e(Auth::user()->nom); ?></td>
                                            <td><?php echo e(Auth::user()->prenom); ?></td>
                                            <td><?php echo e(Auth::user()->pseudo); ?></td>
                                            <td><?php echo e(Auth::user()->email); ?></td>
                                            <td><?php echo e(Auth::user()->ville); ?></td>
                                            <td><?php echo e(Auth::user()->commune); ?></td>
                                            <td><?php echo e(Auth::user()->quartier); ?></td>
                                            <td class="">

                                                <?php if(Auth::user()->reseau1 !== 'null'): ?>
                                                    <?php echo e(Auth::user()->reseau1); ?>

                                                <?php elseif(Auth::user()->reseau2 !== 'null'): ?>
                                                    <?php echo e(Auth::user()->reseau2); ?>

                                                <?php else: ?>
                                                    N/A
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e(Auth::user()->numero_reseau); ?></td>
                                            <td><?php echo e(Auth::user()->numwhats); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <h5 class="email-valid btn-green-mdi">
                                email <i class="mdi mdi-check fw-2 btn-green-mdi"></i>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="card  d-flex justify-content-center
                 align-items-center flex-column h-100 rounded-l-xl shadow-sm transition-shadow hover:shadow-lg table-dark-bg text-white
                ">
                        <div class="card-header">
                            <h4 class="text-center fw-5">Relationnel direct</h4>
                        </div>
                        <div class="card-body">
                            <div class="progress-circle d-flex justify-content-center align-items-center">
                                <span class="progress-text"><?php echo e($user_percent); ?>%</span>
                                <span class="progress-subtext"><?php echo e($user->referrals->count()); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-1">
                <div class="col">
                    <div
                        class="card h-100 rounded-l-xl shadow-sm 
                transition-shadow hover:shadow-lg table-dark-bg text-white">
                        <div class="card-header text-center ">
                            <h4>Verification de votre email.</h4>
                        </div>
                        <div class="card-body">
                            <div class="form text-center">
                                <form class="d-flex text-center justify-content-center align-content-center" action=""
                                    method="post">
                                    <input type="email" class=" rounded outline-0 w-100" value="<?php echo e($user['email']); ?>"
                                        readonly>
                                    <button type="button" class=" btn btn-green">Vérifier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 rounded-l-xl
                 shadow-sm transition-shadow hover:shadow-lg table-dark-bg text-white">
                        <div class="card-header text-center">
                            <h4>Consommation de données</h4>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img src="<?php echo e(asset('assets/images/wifi_icon.svg')); ?>" class="mobile-data">

                                </div>
                                <div>
                                    <img src="<?php echo e(asset('assets/images/moblie_icon.svg')); ?>" alt="mobile"
                                        class="mobile-data">

                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-content-center">
                                <div class="rounded-data text-center">
                                    <span class="data-con"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card h-100 rounded-l-xl shadow-sm transition-shadow hover:shadow-lg table-dark-bg text-white
                ">
                        <div class="card-header text-center">
                            <h4>Balance</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class=" w-100">
                                <div class="wallet rounded bg-white shadow-lg">
                                    <span class="text-center"><?php echo e($user['balance']); ?>FCFA</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-1">
                <div class="col">
                    <div
                        class="card carte h-100 rounded-l-xl shadow-sm
                 transition-shadow hover:shadow-lg table-dark-bg text-white">
                        <div class="card-header carte position-relative w-100">
                            <!-- <div class="position-absolute top-0 right-0 shadow-lg">
                                                <button type="button" class="border-0">
                                                  <i class="mdi mdi-upload">Téléchager</i>
                                                </button>
                                              </div> -->
                            <div class="d-flex justify-content-between">
                                <div>Carte d'achat</div>
                                <div>Santé +</div>
                            </div>
                        </div>
                        <div class="card-boddy">
                            <input type="text" id="name" value="<?php echo e($user['nom']); ?>" hidden>
                            <input type="text" id="pseudo" value="<?php echo e($user['prenom']); ?>" hidden>
                            <input type="text" id="email" value="<?php echo e($user['email']); ?>" hidden>
                            <div class=" d-flex justify-content-between puce">

                            </div>
                            <div class="carte-valeur">
                                <span class="text-center">0.00 Fcfa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div
                        class="card
                h-100 rounded-l-xl shadow-sm transition-shadow hover:shadow-lg table-dark-bg text-white">
                        <div class="card-header">
                            <h4 class="text-center">Créditer votre balance</h4>
                        </div>
                        <div class="card-body">
                            <form class="d-flex">
                                <input type="number" class="w-100 rounded text-center" name="">
                                <button type="button" class="btn btn-green">Créditer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-lg table-dark-bg w-100 d-flex justify-content-center align-content-center flex-column">
                        <div class="card-header w-100 d-flex justify-content-center align-content-center">
                            <h4 class="text-center">Mes 360 premiers invitants.. (6 Premiers de chaque niveau)</h4>
                        </div>
                        <div class="card-body w-100 d-flex justify-content-center align-content-center">
                            <div class="relation-content">
                                <div class="tree">
                                    <?php if(isset($colors)): ?>
                                        <div class="level">
                                            <?php $__currentLoopData = $colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($color['key'] === Auth::user()->id): ?>
                                                    <div class="node" style="background-color:<?php echo e($color['color']); ?>">A</div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    <?php endif; ?>
            
                                    <?php if(isset($users) && isset($profondeurs) && $users->count() <= 360): ?>
                                        <?php
                                            $maxLevels = $profondeurs;
                                            $currentLevel = 0;
                                        ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($currentLevel < $maxLevels): ?>
                                                <div class="level">
                                                    <?php if($user->referrals->count() <= 6): ?>
                                                        <?php $__currentLoopData = $user->referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $referral): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                            <?php
                                                                $auth = null;
                                                                $own = null;
                                                                foreach ($colors as $color) {
                                                                    if ($color['key'] === $referral->referrer->id) {
                                                                        $auth = $color['color'];
                                                                    } elseif ($color['key'] === $referral->id) {
                                                                        $own = $color['color'];
                                                                    }
                                                                }
                                                            ?>
                                                            <div class="node"style="background: linear-gradient(to right, <?php echo e($auth); ?> 50%, <?php echo e($own); ?> 50%);">
                                                                <?php echo e($referral->id); ?>

                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <?php $currentLevel++ ?>
                                                <?php else: ?>
                                                  <?php break; ?>
                                            <?php endif; ?>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    <?php endif; ?>

   
    <script>
        function generateQRCode() {
            var name = document.getElementById('name').value;
            var pseudo = document.getElementById('pseudo').value;
            var email = document.getElementById('email').value;

            var qrData = `Nom: ${name}\nPseudo: ${pseudo}\nEmail: ${email}`;

            // Clear the previous QR code if it exists
            document.querySelector('.puce').innerHTML = "";

            // Generate the QR code
            var qrcode = new QRCode(document.querySelector(".puce"), {
                text: qrData,
                width: 70,
                height: 70,
            });
        }
        generateQRCode();
        let totalDataUsage = 0;

        // Fonction pour observer les performances réseau
        function observeNetworkUsage() {
            const observer = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    // Ajouter la taille de transfert de chaque ressource au total
                    totalDataUsage += entry.transferSize;

                    // Convertir les octets en Go ou Mo
                    let dataUsage;
                    if (totalDataUsage > 1024 * 1024 * 1024) {
                        dataUsage = `${(totalDataUsage / (1024 * 1024 * 1024)).toFixed(2)} Go`;
                    } else if (totalDataUsage > 1024 * 1024) {
                        dataUsage = `${(totalDataUsage / (1024 * 1024)).toFixed(2)} Mo`;
                    } else {
                        dataUsage = `${totalDataUsage} octets`;
                    }

                    // Afficher la consommation de données
                    console.log(`Consommation de données cumulative : ${dataUsage}`);
                });
            });

            observer.observe({
                entryTypes: ['resource']
            });
        }

        // Fonction pour observer la navigation
        function observeNavigation() {
            const observer = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    if (entry.entryType === 'navigation') {
                        totalDataUsage += entry.transferSize;

                        // Convertir les octets en Go ou Mo
                        let dataUsage;
                        if (totalDataUsage > 1024 * 1024 * 1024) {
                            dataUsage = `${(totalDataUsage / (1024 * 1024 * 1024)).toFixed(2)} Go`;
                        } else if (totalDataUsage > 1024 * 1024) {
                            dataUsage = `${(totalDataUsage / (1024 * 1024)).toFixed(2)} Mo`;
                        } else if (totalDataUsage > 1024) {
                            dataUsage = `${(totalDataUsage / (1024)).toFixed(2)} Ko`;
                        } else {
                            dataUsage = `${totalDataUsage} octets`;
                        }

                        document.querySelector('.data-con').textContent = dataUsage;
                        console.log(`Consommation de données cumulative : ${dataUsage}`);
                    }
                });
            });

            observer.observe({
                entryTypes: ['navigation']
            });
        }

        // Appeler les fonctions lorsque la page est chargée
        window.addEventListener('load', () => {
            observeNetworkUsage();
            observeNavigation();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vrtvjmeg/public_html/resources/views/layouts/settings.blade.php ENDPATH**/ ?>