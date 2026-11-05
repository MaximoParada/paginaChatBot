@extends('layouts.app')

@section('contenido')

<!-- Banner Hero Principal -->
<section class="hero-banner">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Tu energía local,<br><span>siempre con vos</span></h1>
            <p class="hero-subtitle">Soluciones eléctricas para tu hogar, con confianza y seguridad.</p>
            <a href="{{ url('/servicios') }}" class="btn-hero">
                Conocé nuestros servicios ➔
            </a>
        </div>
    </div>
</section>

<!-- Sección Trámites -->
<section class="section-tramites">
    <div class="tramites-container">
        
        <h2 class="section-title">Gestioná tus trámites desde nuestra oficina</h2>

        <!-- Acceso Principal: Oficina Virtual -->
        <a href="{{ url('/oficina') }}" class="card-main-link">
            <div class="card-icon-box">
                <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="12" y="16" width="40" height="26" rx="4" stroke="#2d3748" stroke-width="3"/>
                    <path d="M6 48h52a2 2 0 002-2v-2H4v2a2 2 0 002 2z" stroke="#2d3748" stroke-width="3"/>
                    <path d="M34 22l-6 10h6l-2 8 8-10h-6l2-8z" fill="#ffc107"/>
                </svg>
            </div>
            <span class="card-title-text">Oficina virtual</span>
            <div class="card-chevron">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </a>

        <!-- Accesos Secundarios -->
        <div class="cards-grid">
            
            <a href="{{ url('/servicios') }}" class="card-sub-link">
                <div class="card-icon-box">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 12a20 20 0 100 40 20 20 0 000-40z" stroke="#2d3748" stroke-width="3"/>
                        <path d="M32 8v4m0 40v4m20-24h-4M16 32h-4m27.1-14.1l-2.8 2.8M19.7 44.3l-2.8 2.8m0-28.2l2.8 2.8m24.6 24.6l2.8 2.8" stroke="#2d3748" stroke-width="3" stroke-linecap="round"/>
                        <path d="M34 24l-5 8h5l-2 6 7-8h-5l2-6z" fill="#ffc107"/>
                    </svg>
                </div>
                <span class="card-sub-title-text">Servicios</span>
                <div class="card-chevron">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </a>

            <a href="#" class="card-sub-link">
                <div class="card-icon-box">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="10" y="14" width="44" height="38" rx="4" stroke="#2d3748" stroke-width="3"/>
                        <path d="M10 24h44" stroke="#2d3748" stroke-width="3"/>
                        <path d="M20 10v8M44 10v8" stroke="#2d3748" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="22" cy="32" r="3" fill="#ffc107"/>
                        <circle cx="32" cy="32" r="3" fill="#ffc107"/>
                        <circle cx="42" cy="32" r="3" fill="#ffc107"/>
                        <circle cx="22" cy="42" r="3" fill="#ffc107"/>
                        <circle cx="32" cy="42" r="3" fill="#ffc107"/>
                        <circle cx="42" cy="42" r="3" fill="#ffc107"/>
                    </svg>
                </div>
                <span class="card-sub-title-text">Cortes<br>programados</span>
                <div class="card-chevron">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </div>
            </a>

        </div>

        <div class="info-divider">
            <span>ℹ️ Información y atención en un solo lugar</span>
        </div>

        <div class="foqui-section">
            <h3 class="foqui-title">¿Necesitás ayuda? ¡Preguntale a Foqui!</h3>
            <div class="foqui-avatar">
                💡
            </div>
        </div>

    </div>
</section>

@endsection