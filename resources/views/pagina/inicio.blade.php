@extends('layouts.app')

@section('contenido')

<!-- Banner Hero Principal -->
<section class="hero-banner">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">Tu energía local,<br><span>siempre con vos</span></h1>
            <p class="hero-subtitle">Soluciones eléctricas para tu hogar, con confianza y seguridad.</p>
            <a href="{{ url('/servicios') }}" class="btn-hero">
                Conocé nuestros servicios 
            </a>
        </div>
    </div>
</section>

<!-- Sección Trámites -->
<section class="section-tramites py-4">
    <div class="tramites-container container" style="max-width: 800px;">
        
        <h2 class="display-6 fw-bold text-dark mb-4 text-center">Gestioná tus trámites desde nuestra oficina</h2>

        <!-- Acceso Principal: Oficina Virtual -->
        <a href="{{ url('/oficina') }}" class="card-main-link rounded-4 shadow-sm p-3 mb-3 d-flex align-items-center justify-content-between text-decoration-none bg-white">
            <div class="card-icon-box bg-light rounded-circle p-3 d-flex align-items-center justify-content-center">
                <svg viewBox="0 0 24 24" width="32" height="32" fill="none" stroke="#0d6efd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                    <line x1="8" y1="21" x2="16" y2="21"></line>
                    <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
            </div>
            <span class="card-title-text fw-semibold fs-5 text-dark">Oficina virtual</span>
            <div class="card-chevron text-muted">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </a>

        <!-- Accesos Secundarios -->
        <div class="row g-3">
            
            <!-- Tarjeta de Servicios -->
            <div class="col-12 col-md-6">
                <a href="{{ url('/servicios') }}" class="card-sub-link rounded-4 shadow-sm p-3 d-flex align-items-center justify-content-between text-decoration-none bg-white h-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="card-icon-box bg-light rounded-circle p-3 d-flex align-items-center justify-content-center" style="min-width: 50px;">
                            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#0d6efd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                            </svg>
                        </div>
                        <span class="card-sub-title-text fw-semibold text-dark fs-5">Servicios</span>
                    </div>
                    <div class="card-chevron text-muted">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </div>

            <!-- Tarjeta de Cortes Programados -->
            <div class="col-12 col-md-6">
                <a href="#" class="card-sub-link rounded-4 shadow-sm p-3 d-flex align-items-center justify-content-between text-decoration-none bg-white h-100">
                    <div class="d-flex align-items-center gap-3">
                        <div class="card-icon-box bg-light rounded-circle p-3 d-flex align-items-center justify-content-center" style="min-width: 50px;">
                            <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="#0d6efd" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <span class="card-sub-title-text fw-semibold text-dark fs-5 text-nowrap">Cortes programados</span>
                    </div>
                    <div class="card-chevron text-muted">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </a>
            </div>

        </div>

        <div class="text-center my-4">
            <span class="text-secondary fw-medium fs-6">Información y atención en un solo lugar</span>
        </div>

        <!-- Sección Foqui -->
        <div class="foqui-section text-center my-4" style="cursor: pointer;" onclick="toggleChatbot()">
            <h3 class="fw-bold fs-4 text-dark mb-2">¿Necesitás ayuda? ¡Preguntale a Foqui!</h3>
            <p class="text-secondary fs-5 mb-3">Nuestro asistente virtual a tu disposición.</p>
            <div class="foqui-avatar d-inline-block">
                <img src="{{ asset('img/foqui.jpg') }}" alt="Foqui Asistente Virtual" class="img-fluid" style="width: 85px; height: 85px; object-fit: contain;">
            </div>
        </div>

    </div>
</section>

<!-- Botón flotante del Chat -->
<div class="position-fixed bottom-0 end-0 m-4 p-2" style="z-index: 1050;">
    <button type="button" onclick="toggleChatbot()" class="btn btn-light rounded-circle shadow-lg p-2 d-flex align-items-center justify-content-center border border-2 border-primary" style="width: 65px; height: 65px;">
        <img src="{{ asset('img/foqui.jpg') }}" alt="Abrir Chat" class="img-fluid" style="width: 100%; height: 100%; object-fit: contain;">
    </button>
</div>

<!-- VENTANA FLOTANTE DEL CHATBOT (Ajustado alto y scroll container) -->
<div id="botui-chat-container" class="position-fixed bottom-0 end-0 m-4 shadow-lg rounded-4 bg-white overflow-hidden" style="width: 350px; height: 480px; z-index: 1060; display: none; border: 2px solid #0d6efd;">
    <div class="bg-primary text-white p-3 d-flex justify-content-between align-items-center">
        <span class="fw-bold">💡 Foqui - Asistente Virtual</span>
        <button type="button" class="btn-close btn-close-white" onclick="toggleChatbot()"></button>
    </div>
    <div id="foqui-botui-app" style="height: calc(100% - 56px); overflow-y: auto;" class="p-3">
        <bot-ui></bot-ui>
    </div>
</div>

@endsection