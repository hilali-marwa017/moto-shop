@extends('layouts.app')
@section('title', 'Ajouter une moto')
@section('content')

<div class="d-flex justify-content-between mb-4">
    <h4 class="fw-bold text-dark text-center"><i class="bi bi-plus-lg"></i> Ajouter une moto</h4>
</div>

<div class="card p-4" style="max-width:750px;">
    <form action="{{ route('motos.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label fw-semibold">Titre de l'annonce</label>
                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre') }}" placeholder="Ex: Honda CBR 600 RR 2020">
                @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Marque</label>
                <input type="text" name="marque" class="form-control @error('marque') is-invalid @enderror" value="{{ old('marque') }}" placeholder="Honda, Yamaha...">
                @error('marque')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Type</label>
                <select name="type" class="form-select @error('type') is-invalid @enderror">
                    <option value="">-- Choisir --</option>
                    @foreach(['Sportive','Routiere','Chopper','Cross','Scooter','Autre'] as $type)
                    <option value="{{ $type }}" {{ old('type')==$type?'selected':'' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Ville</label>
                <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{ old('ville') }}" placeholder="Casablanca...">
                @error('ville')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Prix (DH)</label>
                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix') }}">
                @error('prix')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Année</label>
                <input type="number" name="annee" class="form-control @error('annee') is-invalid @enderror" value="{{ old('annee') }}" placeholder="2020">
                @error('annee')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Kilométrage</label>
                <input type="number" name="kilometrage" class="form-control @error('kilometrage') is-invalid @enderror" value="{{ old('kilometrage') }}" placeholder="15000">
                @error('kilometrage')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Photo</label>
                <input type="file" name="photo" class="form-control" accept="image/*">
            </div>
            <div class="col-12">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control" rows="4" placeholder="État, équipements, historique...">{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('motos.index') }}" class="btn btn-outline-secondary w-100">
                <i class="bi bi-arrow-left"></i> Retour
            </a>
            <button type="submit" class="btn btn-red w-100">
                <i class="bi bi-check-lg"></i> Publier
            </button>
        </div>
    </form>
</div>

@endsection