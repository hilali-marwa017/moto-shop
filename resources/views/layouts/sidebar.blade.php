<div class="sidebar d-flex flex-column">
    <div class="brand">
        <i class="bi bi-motorcycle"></i> MotoShop
    </div>
    <ul class="nav flex-column mt-3 flex-grow-1">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('motos.index') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <div class="section-title mt-2">Annonces</div>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('motos.index') }}">
                <i class="bi bi-list-ul"></i> Toutes les motos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('motos.create') }}">
                <i class="bi bi-plus-circle"></i> Ajouter une moto
            </a>
        </li>
    </ul>
</div>