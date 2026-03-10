    @extends('layouts.app')
@section('title', 'Modifier la moto')
@section('content')

<div class="d-flex justify-content-bween mb-4">
    <h4 class="fw-bold text-dark text-center"><i class="bi bi-pencil"></i> Modifier l'annonce</h4>
</div>

<div class="card p-4" style="max-width:750px;">
    <form action="{{ route('motos.update', $moto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="row g-3">
            <div class="col-md-8">
                <label class="form-label fw-semibold">Titre</label>
                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre', $moto->titre) }}">
                @error('titre')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Marque</label>
                <input type="text" name="marque" class="form-control @error('marque') is-invalid @enderror" value="{{ old('marque', $moto->marque) }}">
                @error('marque')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Type</label>
                <select name="type" class="form-select @error('type') is-invalid @enderror">
                    <option value="">-- Choisir --</option>
                    @foreach(['Sportive','Routiere','Chopper','Cross','Scooter','Autre'] as $type)
                    <option value="{{ $type }}" {{ old('type', $moto->type)==$type?'selected':'' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Ville</label>
                <input type="text" name="ville" class="form-control @error('ville') is-invalid @enderror" value="{{ old('ville', $moto->ville) }}">
                @error('ville')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Prix (DH)</label>
                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix', $moto->prix) }}">
                @error('prix')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Année</label>
                <input type="number" name="annee" class="form-control @error('annee') is-invalid @enderror" value="{{ old('annee', $moto->annee) }}">
                @error('annee')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Kilométrage</label>
                <input type="number" name="kilometrage" class="form-control @error('kilometrage') is-invalid @enderror" value="{{ old('kilometrage', $moto->kilometrage) }}">
                @error('kilometrage')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Nouvelle photo</label>
                <input type="file" name="photo" class="form-control" accept="image/*">
                @if($moto->photo)
                    <img src="{{ asset('storage/' . $moto->photo) }}" class="mt-2 rounded" style="height:80px; object-fit:cover;">
                @endif
            </div>
            <div class="col-12">
                <label class="form-label fw-semibold">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $moto->description) }}</textarea>
            </div>
        </div>
        <div class="d-flex gap-2 mt-3">
        <a href="{{ route('motos.index') }}" class="btn btn-outline-dark w-100">
            <i class="bi bi-arrow-left"></i> Retour
        </a>
        <button type="submit" class="btn btn-danger w-100 py-2">
            <i class="bi bi-check-lg"></i> Mettre à jour
        </button>
</div>
        
     
    </form>
</div>

@endsection