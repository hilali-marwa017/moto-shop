@extends('layouts.app')
@section('title', $moto->titre)
@section('content')

<div class="text-center mb-4">
    <h4 class="fw-bold text-secondary" style="font-size:1.8rem; padding-bottom:6px;">
        <i class="bi bi-motorcycle"></i> {{ $moto->titre }}
    </h4>
</div>

<div class="row g-4">
    <div class="col-md-6">
        @if($moto->photo)
            <img src="{{ asset('storage/' . $moto->photo) }}" class="w-100 rounded-3 shadow" style="max-height:400px; object-fit:cover;">
        @else
            <div class="moto-placeholder rounded-3" style="height:400px;">
                <i class="bi bi-bicycle" style="font-size:5rem; color:#ccc;"></i>
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="card p-4 h-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fs-2 fw-bold text-dark">{{ number_format($moto->prix,0) }} DH</span>
                @if($moto->statut == 'disponible')
                    <span class="badge bg-success fs-6">
                        <i class="bi bi-check-circle"></i> Disponible
                    </span>
                @else
                    <span class="badge bg-danger fs-6">
                        <i class="bi bi-x-circle"></i> Vendue
                    </span>
                @endif
            </div>
            <hr>
            <div class="row g-3">
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-award"></i> Marque</small>
                    <div class="fw-bold">{{ $moto->marque }}</div>
                </div>
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-tag"></i> Type</small>
                    <div class="fw-bold">{{ $moto->type }}</div>
                </div>
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-calendar"></i> Année</small>
                    <div class="fw-bold">{{ $moto->annee }}</div>
                </div>
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-speedometer2"></i> Kilométrage</small>
                    <div class="fw-bold">{{ number_format($moto->kilometrage) }} km</div>
                </div>
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-geo-alt"></i> Ville</small>
                    <div class="fw-bold">{{ $moto->ville }}</div>
                </div>
                <div class="col-6">
                    <small class="text-muted"><i class="bi bi-clock"></i> Publiée le</small>
                    <div class="fw-bold">{{ $moto->created_at->format('d/m/Y') }}</div>
                </div>
            </div>
            @if($moto->description)
            <hr>
            <small class="text-muted"><i class="bi bi-card-text"></i> Description</small>
            <p class="mt-1 text-dark">{{ $moto->description }}</p>
            @endif
            <div class="d-flex gap-2 mt-3">
                <a href="{{ route('motos.index') }}" class="btn btn-outline-secondary w-100">
                    <i class="bi bi-arrow-left"></i> Retour
                </a>
                <form action="{{ route('motos.statut', $moto->id) }}" method="POST" class="w-100">
                    @csrf
                    <button type="submit" class="btn btn-red w-100">
                        <i class="bi bi-arrow-left-right"></i>
                        {{ $moto->statut == 'disponible' ? 'Marquer vendue' : 'Remettre dispo' }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection