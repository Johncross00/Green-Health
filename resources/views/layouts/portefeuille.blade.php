@extends('layouts.index')
@include('layouts.dash-head')
@section('title', 'portefeuille')
@section('sidebar')
<x-sidebar />
@endsection
@section('navbar')
<x-navbar />
@endsection
@section('sidebar-container')
<style>
    .side-container-bg {
        background: linear-gradient(to bottom right, #fff9c4, #fff59d);
        min-height: 100vh;
    }

    .card {
        background-color: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid #ffd54f;
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        background-color: rgba(255, 252, 232, 0.7);
    }

    .action-icon {
        width: 48px;
        height: 48px;
        stroke: #f9a825;
        transition: stroke 0.3s ease;
    }

    .card:hover .action-icon {
        stroke: #f57f17;
    }

    .welcome-card {
        background-color: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
    }

    .phone-number {
        background-color: #fff9c4;
        color: #f57f17;
    }

    .balance-amount {
        color: #f57f17;
    }

    .action-title {
        color: #f57f17;
        transition: color 0.3s ease;
    }

    .card:hover .action-title {
        color: #e65100;
    }
</style>

@include('coupons.retrait')
<div id="userData" data-user-id="{{ Auth::user()->id }}"></div>

<div class="side-container-bg d-flex justify-content-center align-items-center ">
    <div class="container py-4">
        <!-- Carte de bienvenue -->
        <div
            class="welcome-card rounded-3 p-3 mb-4 d-flex flex-column flex-sm-row justify-content-between align-items-center">
            <h1 class="fs-4 fw-bold mb-2 mb-sm-0 text-warning">Bienvenue {{ Auth::user()->pseudo }}</h1>
            <p class="phone-number rounded-pill px-3 py-1">{{ Auth::user()->numero_reseau }}</p>
        </div>

        <!-- Section pour le solde du portefeuille et les gains disponibles dans la même row -->
        <div class="row mb-4">
            <!-- Carte des gains disponibles (30% de la largeur) -->
            <div class="col-md-3">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h2 class="card-title fs-4 text-warning">Gains disponibles</h2>
                        <p class="balance-amount display-4 fw-bold">{{ Auth::user()->gain }} XOF</p>
                        <!-- Formulaire pour transférer les gains -->
                    </div>
                </div>
            </div>

            <!-- Carte du solde du portefeuille (70% de la largeur) -->
            <div class="col-md-9">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h2 class="card-title fs-4 text-warning">Solde du portefeuille</h2>
                        <p class="balance-amount display-4 fw-bold">{{ Auth::user()->wallet_balance }} Jetons Green</p>
                        {{-- <p class="balance-amount display-4 fw-bold">{{ Auth::user()->wallet->balance }} Green</p> --}}
                        <button type="submit" class="btn btn-warning mt-3" data-bs-toggle="modal"
                            data-bs-target="#transferModal">Recharger le portefeuille</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- Actions du portefeuille -->
        <div class="row row-cols-1 row-cols-md-2 g-1 g-md-4">
            <div class="col">
                {{-- <a href="{{ route('buy.coupon') }}"> --}}
                <div class="card h-100" data-bs-toggle="modal" data-bs-target="#achatBonModal">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <svg class="action-icon mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                            <line x1="6" y1="8" x2="6" y2="8" />
                            <line x1="10" y1="8" x2="18" y2="8" />
                            <line x1="6" y1="12" x2="6" y2="12" />
                            <line x1="10" y1="12" x2="18" y2="12" />
                            <line x1="6" y1="16" x2="6" y2="16" />
                            <line x1="10" y1="16" x2="18" y2="16" />
                        </svg>
                        <h3 class="action-title fs-5 fw-semibold text-center">Achat de BON</h3>
                    </div>
                </div>
                </a>
            </div>

            <div class="col">
                {{-- <a href="{{ route('wallet.withdraw') }}"> --}}
                <div class="card h-100" data-bs-toggle="modal" data-bs-target="#retraitModal">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <svg class="action-icon mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="6" width="20" height="12" rx="2" />
                            <circle cx="12" cy="12" r="2" />
                            <path d="M6 12h.01M18 12h.01" />
                        </svg>
                        <h3 class="action-title fs-5 fw-semibold text-center">Retrait CASH</h3>
                    </div>
                </div>
                </a>
            </div>



            <div class="col">
                <a data-bs-toggle="modal" data-bs-target="#userTransferModal">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <svg class="action-icon mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 3L21 7L17 11" />
                                <path d="M3 13L7 17L3 21" />
                                <path d="M21 7H3" />
                                <path d="M3 17H21" />
                            </svg>
                            <h3 class="action-title fs-5 fw-semibold text-center">TRANSFERT INTER UTILISATEUR</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a data-bs-toggle="modal" data-bs-target="#historyModal">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <svg class="action-icon mb-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 3L21 7L17 11" />
                                <path d="M3 13L7 17L3 21" />
                                <path d="M21 7H3" />
                                <path d="M3 17H21" />
                            </svg>
                            <h3 class="action-title fs-5 fw-semibold text-center">HISTORIQUE DES TRANSFERTS</h3>
                        </div>
                    </div>
                </a>
            </div>


        </div>
    </div>
</div>




<!-- Modal pour le transfert du solde vers le portefeuille -->
<div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="transferModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transferModalLabel">Recharger le portefeuille</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="transferForm">
                    @csrf
                    <div class="mb-5">
                        <label for="transfer_amount" class="form-label">Montant à transférer (en Jetons)</label>
                        <input type="number" class="form-control" id="transfer_amount" name="amount"
                            min="1" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Valider</button>
                </form>

                <!-- Animation de chargement cachée par défaut -->
                <div id="loading" class="text-center mt-3 d-none">
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal pour le transfert inter-utilisateur -->
<div class="modal fade" id="userTransferModal" tabindex="-1" aria-labelledby="userTransferModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userTransferModalLabel">Transférer à un autre utilisateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="userTransferForm">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient_phone" class="form-label">Numéro de téléphone du destinataire</label>
                        <input type="text" class="form-control" id="recipient_phone" name="recipient_phone"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="user_transfer_amount" class="form-label">Montant à transférer (en Jetons)</label>
                        <input type="number" class="form-control" id="user_transfer_amount" name="amount"
                            min="1" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Valider</button>
                </form>

                <!-- Animation de chargement cachée par défaut -->
                <div id="loadingTransfer" class="text-center mt-3 d-none">
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal pour l'historique des transactions -->
<div class="modal fade" id="historyModal" tabindex="-1" aria-labelledby="historyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Historique des Transferts</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <div id="transaction-history-content">
                    <!-- Transactions seront chargées ici via AJAX -->
                    <div class="text-center">
                        <div class="spinner-border text-warning" role="status">
                            <span class="visually-hidden">Chargement...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal pour l'achat de bons -->
<div class="modal fade" id="achatBonModal" tabindex="-1" aria-labelledby="achatBonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="achatBonModalLabel">Acheter un Bon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="achatBonForm" action="{{ route('buy.coupon') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="bon_id" class="form-label">Sélectionnez un Bon</label>
                        <div class="row g-3">
                            @foreach($coupons as $coupon)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                <input type="radio" class="btn-check" name="bon_id" id="bon_{{ $coupon->id }}" value="{{ $coupon->id }}" required>
                                <label class="btn btn-outline-primary w-100 h-100" for="bon_{{ $coupon->id }}">
                                    <div class="card h-100 position-relative border-0 shadow-sm {{ $coupon->quantite === 0 ? 'opacity-50' : '' }}"
                                        style="background: rgba(255, 255, 255, 0.8); border-radius: 20px; overflow: hidden;">
                                        <div class="card-header text-center bg-warning text-dark fw-bolder fs-6 py-2 text-uppercase">
                                            {{$coupon->name}}
                                        </div>
                                        <div class="card-body d-flex flex-column align-items-center justify-content-center p-2">
                                            <div class="rounded-circle p-2 bg-warning shadow-sm mb-2" style="width: 50px; height: 50px;">
                                                <x-dollar-icon class="text-white" style="font-size: 1.2rem;" />
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-1 fs-6"><strong>{{ $coupon->quantite }}</strong> en stock</p>
                                                <p class="mb-0 fs-6 text-warning"><strong>{{ number_format($coupon->price, 0, ',', ' ') }}</strong> Fcfa</p>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Acheter</button>
                </form>

                <!-- Animation de chargement cachée par défaut -->
                <div id="loadingBuy" class="text-center mt-3 d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content {
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.8);
        /* Fond blanc plus prononcé */
        backdrop-filter: blur(10px);
        /* Effet de flou */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Ombre subtile */
        border: 1px solid rgba(255, 255, 255, 0.3);
        /* Bordure subtile */
    }

    .modal-header {
        background: rgba(255, 221, 0, 0.8);
        /* Fond jaune pour le header */
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        /* Bordure subtile */
    }

    .modal-title {
        color: #333;
        font-weight: bold;
    }

    .form-select {
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        /* Bordure subtile */
        background: rgba(255, 255, 255, 0.8);
        /* Fond blanc plus prononcé */
        backdrop-filter: blur(10px);
        /* Effet de flou */
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        border-radius: 10px;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
    }

    .btn-check:checked+.btn-outline-primary {
        background-color: rgba(0, 123, 255, 0.9);
        border-color: #007bff;
    }
</style>

<script>
    // Configurer les options de Toastr
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Logger les actions des cartes
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', () => {
            console.log('Action clicked:', card.querySelector('.action-title').textContent);
        });
    });

    // Gestionnaire pour le formulaire de transfert de gains vers le portefeuille
    document.getElementById('transferForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Cacher le bouton et afficher l'animation de chargement
        const transferButton = document.querySelector('#transferForm button');
        const transferLoading = document.getElementById('loading');
        transferButton.classList.add('d-none');
        transferLoading.classList.remove('d-none');

        // Récupérer l'ID de l'utilisateur et le montant à transférer
        const userId = document.getElementById( 'userData' ).dataset.userId;
        const amount = document.getElementById('transfer_amount').value;

        // Envoyer la requête AJAX
        fetch(`/transfer-gain-to-wallet/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    amount: amount
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.message) {
                    toastr.success('Transfert réussi !');
                    location.reload();
                } else {
                    toastr.error(data.error || 'Erreur lors du transfert.');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            })
            .finally(() => {
                // Réafficher le bouton et cacher l'animation
                transferButton.classList.remove('d-none');
                transferLoading.classList.add('d-none');
            });
    });






    // Gestionnaire pour le formulaire de transfert inter-utilisateur
    document.getElementById('userTransferForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Cacher le bouton et afficher l'animation de chargement
        const userTransferButton = document.querySelector('#userTransferForm button');
        const userTransferLoading = document.getElementById('loadingTransfer');
        userTransferButton.classList.add('d-none');
        userTransferLoading.classList.remove('d-none');

        // Récupérer l'ID de l'utilisateur, le montant et le numéro de téléphone du destinataire
        const userId = document.getElementById( 'userData' ).dataset.userId;
        const recipientPhone = document.getElementById('recipient_phone').value;
        const amount = document.getElementById('user_transfer_amount').value;

        // Afficher les données dans la console pour vérification
        console.log({
            recipient_phone: recipientPhone,
            amount: amount
        });

        if (!amount) {
            alert("Le montant ne peut pas être vide.");
            // Réafficher le bouton et cacher l'animation
            userTransferButton.classList.remove('d-none');
            userTransferLoading.classList.add('d-none');
            return;
        }

        // Envoyer la requête AJAX
        fetch(`/transfer-to-other-wallet/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    recipient_phone: recipientPhone,
                    amount: amount
                })
            })
            .then(response => response.json().then(data => ({
                status: response.status,
                body: data
            })))
            .then(data => {
                if (data.status === 422) {
                    console.error('Erreur de validation:', data.body.errors);
                    toastr.error('Erreur de validation: ' + JSON.stringify(data.body.errors));
                } else if (data.body.message) {
                    toastr.success('Transfert réussi !');
                    location.reload();
                } else {
                    toastr.error(data.body.error || 'Erreur lors du transfert.');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue. Veuillez réessayer.');
            })
            .finally(() => {
                // Réafficher le bouton et cacher l'animation
                userTransferButton.classList.remove('d-none');
                userTransferLoading.classList.add('d-none');
            });
    });






    $(document).ready(function() {
        // Lorsque le modal est ouvert
        $('#historyModal').on('show.bs.modal', function(event) {
            var modal = $(this);
            var contentDiv = modal.find('#transaction-history-content');

            // Afficher un spinner pendant le chargement
            contentDiv.html(`
                <div class="text-center">
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            `);

            // Faire une requête AJAX pour obtenir les transactions
            $.ajax({
                url: "{{ route('wallet.history') }}",
                type: 'GET',
                success: function(data) {
                    contentDiv.html(data);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    console.error('Response:', xhr.responseText);
                    contentDiv.html(
                        '<p class="text-center text-danger">Erreur lors du chargement des transactions.</p>'
                    );
                }
            });
        });


        // Gestionnaire pour le formulaire d'achat de bons
        document.getElementById('achatBonForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Cacher le bouton et afficher l'animation de chargement
            const buyButton = document.querySelector('#achatBonForm button');
            const buyLoading = document.getElementById('loadingBuy');
            buyButton.classList.add('d-none');
            buyLoading.classList.remove('d-none');

            // Récupérer l'ID du bon sélectionné
            const bonId = document.getElementById('bon_id').value;

            // Envoyer la requête AJAX
            fetch('{{ route('buy.coupon') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            bon_id: bonId
                        })
                    })
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        toastr.success('Achat de bon réussi !');
                        location.reload();
                    } else {
                        toastr.error(data.error || 'Erreur lors de l\'achat du bon.');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue. Veuillez réessayer.');
                })
                .finally(() => {
                    // Réafficher le bouton et cacher l'animation
                    buyButton.classList.remove('d-none');
                    buyLoading.classList.add('d-none');
                });
        });
    });




    // Gérer la pagination via AJAX
    $(document).on('click', '#historyModal .pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var modal = $('#historyModal');
        var contentDiv = modal.find('#transaction-history-content');

        // Afficher un spinner pendant le chargement
        contentDiv.html(`
                <div class="text-center">
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            `);

        // Faire une requête AJAX pour obtenir les nouvelles transactions
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                contentDiv.html(data);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                console.error('Response:', xhr.responseText);
                contentDiv.html(
                    '<p class="text-center text-danger">Erreur lors du chargement des transactions.</p>'
                );
            }
        });
    });
</script>


@endsection