@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-dark">
        <i class="bi bi-speedometer2 text-center"></i> Dashboard
    </h4>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="stat-card" style="background:linear-gradient(135deg,#e63946,#c1121f);">
            <div class="mb-2"><i class="bi bi-collection" style="font-size:1.8rem;"></i></div>
            <div class="fs-1 fw-bold">{{$stats['total']}}</div>
            <div class="opacity-75">Total Annonces</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="background:linear-gradient(135deg,#2dc653,#1a8c38);">
            <div class="mb-2"><i class="bi bi-check-circle" style="font-size:1.8rem;"></i></div>
            <div class="fs-1 fw-bold">{{$stats['disponibles']}}</div>
            <div class="opacity-75">Disponibles</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="background:linear-gradient(135deg,#f48c06,#dc6804);">
            <div class="mb-2"><i class="bi bi-tag" style="font-size:1.8rem;"></i></div>
            <div class="fs-1 fw-bold">{{$stats['vendues']}}</div>
            <div class="opacity-75">Vendues</div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card" style="background:linear-gradient(135deg,#4361ee,#3a0ca3);">
            <div class="mb-2"><i class="bi bi-cash-stack" style="font-size:1.8rem;"></i></div>
            <div class="fs-1 fw-bold">{{number_format($stats['prix_moyen'],0)}}</div>
            <div class="opacity-75">Prix Moyen (DH)</div>
        </div>
    </div>
</div>

@endsection