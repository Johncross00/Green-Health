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
        background: rgba(245, 251, 252, 1);
    }

    body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 20px;
        /* Coins arrondis */
        background: rgba(255, 221, 0, 0.5);
        /* Fond semi-transparent */
        backdrop-filter: blur(10px);
        /* Effet de flou */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        /* Ajout d'une ombre subtile */
        transition: transform 0.3s ease;
        /* Animation de transformation */
    }

    .card:hover {
        transform: scale(1.05);
        /* Effet de zoom au survol */
    }

    .card-title {
        color: orange;
        /* Couleur orange pour le titre */
        font-weight: bold;
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

    /* Gestion de l'alignement horizontal des cartes */
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        /* Espacement entre les cartes */
        justify-content: left;
        /* Alignement à gauche */
    }

    .col-md-6 {
        flex: 0 0 calc(33.3333% - 20px);
        /* Ajustement de la largeur des cartes */
    }

    @media (max-width: 768px) {
        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
            /* Cartes plus petites sur les écrans moyens */
        }
    }

    @media (max-width: 576px) {
        .col-md-6 {
            flex: 0 0 100%;
            /* Cartes qui prennent toute la largeur sur les petits écrans */
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
            <div class="row">
                @foreach($coupons as $coupon)
                <div class="col-md-6">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">{{ $coupon->code }}</h5>
                            <p class="card-text">Prix: {{ $coupon->price }} Fcfa</p>
                            <p class="card-text">Description: {{ $coupon->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>

@endsection