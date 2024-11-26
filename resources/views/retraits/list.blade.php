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
        .card {
            border: none;
            border-radius: 4px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: orange;
            font-weight: bold;
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

       
      

       
    </style>
@php
$user =Auth::user();
@endphp
    <div class="w-100 side-container-bg">
        <div class="w-100">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <!-- Card 1 --> 
              
            </div> 
    </div>
    </div>


@endsection
