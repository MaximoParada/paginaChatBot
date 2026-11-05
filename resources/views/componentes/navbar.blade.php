<header class="custom-header">
    <div class="custom-navbar-container">
        
  
        <a href="{{ url('/') }}" class="brand-container d-flex align-items-center text-decoration-none gap-2">
            <img src="{{ asset('img/logo electroneuquen.png') }}" alt="ElectroNeuquén" class="img-fluid" style="max-height: 60px; width: auto; object-fit: contain;">
            <span class="brand-text-full fw-bold fs-4 text-dark">Electro<span style="color: #0d6efd;">Neuquén</span></span>
        </a>

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