<?php
@extends('layouts.index')
@include('layouts.dash-head')
@section('title', 'utilisateurs.actifs')
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

    .card-header {
        background-color: #fd7e14;
        color: rgb(186, 177, 177);
    }

    .table th {
        color: #fd7e14;
    }

    .icon-orange {
        color: #fd7e14;
    }

    .btn-activate {
        background-color: #28a745;
        color: white;
    }

    .btn-deactivate {
        background-color: #dc3545;
        color: white;
    }

    .btn-activate:hover,
    .btn-deactivate:hover {
        color: white;
    }
</style>

<div class="w-100 side-container-bg">
    <div class="w-100">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="card-title text-black mb-0">Liste des Partenaires</h2>
            </div>
            <div class="card-body">
                <!-- Table pour grands écrans -->
                <div class="table-responsive d-none d-md-block">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Localité</th>
                                <th>Identifiant</th>
                                <th>Balance</th>
                                <th>Commission</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @if(isset($partenaires))
                        <tbody>
                            @foreach($partenaires as $partenaire)
                            <tr>
                                <td><i class="bi bi-person icon-orange me-2"></i>
                                    {{ optional($partenaire->user)->nom . ',' . optional($partenaire->user)->prenom ?: 'Utilisateur non trouvé' }}
                                </td>
                                <td><i class="bi bi-envelope icon-orange me-2"></i>
                                    {{ optional($partenaire->user)->email ?: 'Email non disponible' }}
                                </td>
                                <td><i class="bi bi-geo-alt icon-orange me-2"></i>
                                    {{$partenaire->location }}
                                </td>
                                <td><i class="bi bi-credit-card icon-orange me-2"></i>
                                    {{$partenaire->identifiant}}
                                </td>
                                <td><i class="bi bi-coin icon-orange me-2"></i>
                                    {{$partenaire->balance}}Gr
                                </td>
                                <td>
                                    {{$partenaire->commissions}}Gr
                                </td>
                                <td>
                                    {{$partenaire->status}}
                                </td>
                                @if($partenaire->status=='inactive')
                                <td>
                                    <form action="{{route('post-activer-partenaire')}}" method="post">
                                        @method('POST')
                                        @csrf
                                        <input required type="text" hidden name="partenaire" value="{{$partenaire->id}}">
                                        <button type="submit" class="btn btn-sm btn-activate">Activer</button>
                                    </form>
                                </td>
                                @else
                                <td>
                                    <form action="{{route('post-deactiver-partenaire')}}" method="post">
                                        @method('POST')
                                        @csrf
                                        <input required type="text" hidden name="partenaire" value="{{$partenaire->id}}">
                                        <button type="submit" class="btn btn-sm btn-deactivate">Désactiver</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
                    </table>
                </div>

                <!-- Cartes pour petits écrans -->
                <div class="d-md-none">
                    @if(isset($partenaires))
                    @foreach($partenaires as $partenaire)
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title text-black"><i class="bi bi-person icon-orange me-2"></i>
                                {{$partenaire->user->nom .','.$partenaire->user->prenom }}
                            </h5>
                            <p class="card-text"><i class="bi bi-envelope icon-orange me-2"></i>
                                {{$partenaire->user->email}}
                            </p>
                            <p class="card-text"><i class="bi bi-geo-alt icon-orange me-2"></i>
                                {{$partenaire->location}}
                            </p>
                            <p class="card-text"><i class="bi bi-credit-card icon-orange me-2"></i>
                                {{$partenaire->identifiant }}
                            </p>
                            <p class="card-text"><i class="bi bi-coin icon-orange me-2"></i>Balance:{{$partenaire->balance }}Gr | Commission: {{$partenaire->commissions }}Gr</p>
                            <div class="mt-3">
                                @if($partenaire->status=='inactive')
                                <form action="{{route('post-activer-partenaire')}}" method="post">
                                    @method('POST')
                                    @csrf
                                    <input required type="text" hidden name="partenaire" value="{{$partenaire->id}}">
                                    <button type="submit" class="btn btn-sm btn-activate">Activer</button>
                                </form>
                                @else
                                <form action="{{route('post-deactiver-partenaire')}}" method="post">
                                    @method('POST')
                                    @csrf
                                    <input required type="text" hidden name="partenaire" value="{{$partenaire->id}}">
                                    <button type="submit" class="btn btn-sm btn-deactivate">Désactiver</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection