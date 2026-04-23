@extends('layouts.app')
@section('title', 'Annonces')
@section('content')
{{ dd($moto->photo) }}
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold">Annonces</h4>
    <a href="{{ route('motos.create') }}" class="btn btn-dark">
        <i class="bi bi-plus-lg"></i> Ajouter
    </a>
</div>
<div class="card p-3 mb-4">
    <form method="GET" novalidate class="row g-3">
        <div class="col-md-4">
            <select name="type" class="form-select">
                <option value="">-- Type --</option>
                @foreach(['Sportive','Routiere','Chopper','Cross','Scooter','Autre'] as $type)
                <option value="{{ $type }}" {{ request('type')==$type?'selected':'' }}>{{ $type }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" name="ville" class="form-control" value="{{ request('ville') }}" placeholder="Ville">
        </div>
        <div class="col-md-2">
            <select name="statut" class="form-select">
                <option value="">-- Statut --</option>
                <option value="disponible"{{ request('statut')=='disponible'?'selected':'' }}>Disponible</option>
                <option value="vendue"{{ request('statut')=='vendue'?'selected':'' }}>Vendue</option>
            </select>
        </div>
        <div class="col-md-2 d-flex gap-2 align-items-center">
            <button type="submit" class="btn btn-red btn-sm">
                <i class="bi bi-search"></i>
            </button>
            <a href="{{ route('motos.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-counterclockwise"></i>
            </a>
        </div>
    </form>
</div>

<div class="row g-4">
    @foreach($motos as $moto)
    <div class="col-md-4">
        <div class="card h-100">
            @if($moto->photo)
                <img src="{{ asset('storage/' . $moto->photo) }}" class="moto-img">
            @else
                <div class="moto-placeholder">
                    <i class="bi bi-bicycle" style="font-size:4rem; color:#ccc;"></i>
                </div>
            @endif
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="fw-bold text-dark mb-0">{{ $moto->titre }}</h5>
                    @if($moto->statut == 'disponible')
                        <span class="badge bg-success">Disponible</span>
                    @else
                        <span class="badge bg-danger">Vendue</span>
                    @endif
                </div>
                <div class="fw-bold fs-5 text-danger mb-2">
                    {{($moto->prix)}} DH
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-light text-dark border">
                        <i class="bi bi-tag"></i> {{$moto->type}}
                    </span>
                    <span class="badge bg-light text-dark border">
                        <i class="bi bi-geo-alt"></i> {{$moto->ville}}
                    </span>
                    <span class="badge bg-light text-dark border">
                        <i class="bi bi-calendar"></i> {{$moto->annee}}
                    </span>
                    <span class="badge bg-light text-dark border">
                        <i class="bi bi-speedometer2"></i> {{($moto->kilometrage)}} km
                    </span>
                </div>
            </div>
            <div class="card-footer bg-white border-top d-flex justify-content-between align-items-center">
                <div class="d-flex gap-2">
                    <a href="{{ route('motos.show', $moto->id) }}" class="btn btn-sm btn-outline-info">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a href="{{ route('motos.edit', $moto->id) }}" class="btn btn-sm btn-outline-warning">
                        <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('motos.destroy', $moto->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </div>
                <form action="{{ route('motos.statut', $moto->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-arrow-left-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection