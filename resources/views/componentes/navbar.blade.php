<header class="custom-header">
    <div class="custom-navbar-container">
        
        <!-- Logo ElectroNeuquén más grande y con texto al lado -->
        <a href="{{ url('/') }}" class="brand-container d-flex align-items-center text-decoration-none gap-2">
            <img src="{{ asset('img/logo electroneuquen.png') }}" alt="ElectroNeuquén" class="img-fluid" style="max-height: 60px; width: auto; object-fit: contain;">
            <span class="brand-text-full fw-bold fs-4 text-dark">Electro<span style="color: #0d6efd;">Neuquén</span></span>
        </a>

        <!-- Buscador con forma de Píldora -->
        <div class="pill-search-container">
            <div class="pill-search">
                <input type="text" placeholder="Buscar...">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#8d99ae" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Links con Reactividad -->
        <ul class="nav-menu-links">
            <li>
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                    Inicio
                </a>
            </li>
            <li>
                <a href="{{ url('/oficina') }}" class="{{ request()->is('oficina') ? 'active' : '' }}">
                    Oficina Virtual
                </a>
            </li>
            <li>
                <a href="{{ url('/servicios') }}" class="{{ request()->is('servicios') ? 'active' : '' }}">
                    Servicios
                </a>
            </li>
        </ul>

    </div>
</header>