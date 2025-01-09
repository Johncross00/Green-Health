@extends('layouts.index')
@include('layouts.dash-head')
@section('title','Mes bons')
@section('sidebar')
<x-sidebar />
@endsection
@section('navbar')
<x-navbar />
@endsection

@section('sidebar-container')
<style>
    .side-container-bg {
        background: rgba(245, 251, 252, 0.5);
    }

    body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 20px;
        background: rgba(255, 255, 255, 0.8); /* Fond blanc plus prononcé */
        backdrop-filter: blur(10px); /* Effet de flou */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre subtile */
        border: 1px solid rgba(255, 255, 255, 0.3); /* Bordure subtile */
        transition: transform 0.3s ease, background 0.3s ease; /* Animation de transformation et de fond */
    }

    .card:hover {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 0.9); /* Fond légèrement plus opaque au survol */
    }

    .card-title {
        color: orange;
        font-weight: bold;
        font-size: 24px;
    }

    .card-text {
        color: #333;
    }

    .card-footer {
        background-color: #f7f7f7;
        border-top: none;
        color: #555;
    }

    .card-body {
        padding: 20px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: left;
    }

    .col-md-6 {
        flex: 0 0 calc(33.3333% - 20px);
    }

    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
        }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            flex: 0 0 100%;
        }
    }
</style>
@php
$user = Auth::user();
@endphp

<div class="w-100 side-container-bg">
    <div class="w-100">
        <div class="container">
            <h1 class="mb-4">Mes Bons</h1>
            @if($coupons->isEmpty())
            <p>Vous ne possédez aucun bon pour le moment.</p>
            @else
            <section class="row g-3">
                @foreach ($coupons as $coupon)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                    <div class="card h-100 position-relative border-0 shadow-sm {{ $coupon->quantite === 0 ? 'opacity-50' : '' }}"
                        style="background: rgba(255, 255, 255, 0.8); border-radius: 15px; overflow: hidden;">
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
                </div>
                @endforeach
            </section>
            @endif
        </div>
    </div>
</div>

@endsection