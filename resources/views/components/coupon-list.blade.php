@props(['coupons' => null])

<h4 class="text-white mb-4">Liste des bons</h4>
<section class="row g-3">
    @foreach ($coupons as $coupon)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
        <div class="card h-100 position-relative border-0 shadow-sm {{ $coupon->quantite === 0 ? 'opacity-50' : '' }}"
            style="background: rgba(255, 255, 255, 0.2); border-radius: 15px; overflow: hidden;">
            <!-- Mise en avant du nom du coupon -->
            <div class="card-header text-center bg-warning text-dark fw-bolder fs-6 py-2 text-uppercase">
                {{$coupon->name}}
            </div>
            <div class="card-body d-flex flex-column align-items-center justify-content-center p-2">
                <div class="rounded-circle p-2 bg-warning shadow-sm mb-2" style="width: 50px; height: 50px;">
                    <x-dollar-icon class="text-white" style="font-size: 1.2rem;" />
                </div>
                <!-- Quantité et prix en dessous de l'icône -->
                <div class="text-center">
                    <p class="mb-1 fs-6"><strong>{{ $coupon->quantite }}</strong> en stock</p>
                    <p class="mb-0 fs-6 text-warning"><strong>{{ number_format($coupon->price, 0, ',', ' ') }}</strong> Fcfa</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>