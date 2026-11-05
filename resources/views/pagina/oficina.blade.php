@extends('layouts.app')

@section('contenido')

<!-- Encabezado de Oficina Virtual -->
<section class="oficina-header">
    <div class="oficina-header-container">
        <div class="oficina-header-content">
            <h1 class="oficina-title">Oficina Virtual,<br><span>trámites 100% online</span></h1>
            <p class="oficina-subtitle">Gestioná tus solicitudes, facturas y reclamos en línea las 24 horas de forma rápida y sencilla.</p>
        </div>
    </div>
</section>

<!-- Sección Principal de Oficina Virtual -->
<section class="oficina-section">
    <div class="oficina-container">

        <!-- SECCIÓN 1: CONTRATAR SERVICIO -->
        <div class="contratar-card">
            <div class="contratar-info">
                <h2>⚡ ¿Necesitás un nuevo servicio eléctrico?</h2>
                <p>Solicitá el alta de suministro o nuevas instalaciones para tu hogar, comercio o industria de forma 100% digital.</p>
            </div>
            <div>
                <a href="#" class="btn-contratar-action">
                    Solicitar Alta de Servicio ➔
                </a>
            </div>
        </div>

        <!-- SECCIÓN 2: GESTIÓN DE TRÁMITES -->
        <div class="tramites-header-wrapper">
            <h2 class="tramites-section-title">Gestión de Trámites</h2>
            
            <div class="custom-dropdown-container" id="tramiteDropdown">
                <button type="button" class="custom-dropdown-btn">
                    <span>Seleccionar trámite rápido...</span>
                    <span class="dropdown-arrow">▼</span>
                </button>
                <ul class="custom-dropdown-menu">
                    <li><a class="custom-dropdown-item" data-target="#pago"><span>💳</span> Métodos de Pago</a></li>
                    <li><a class="custom-dropdown-item" data-target="#deuda"><span>📄</span> Consultar Deuda</a></li>
                    <li><a class="custom-dropdown-item" data-target="#vencimiento"><span>📅</span> Próximos Vencimientos</a></li>
                    <li><a class="custom-dropdown-item" data-target="#titularidad"><span>📝</span> Cambio de Titularidad</a></li>
                    <li><a class="custom-dropdown-item" data-target="#baja"><span>⚠️</span> Solicitar Baja</a></li>
                    <li><a class="custom-dropdown-item" data-target="#reclamo"><span>📢</span> Reclamos y Servicios</a></li>
                </ul>
            </div>
        </div>

        <!-- Grilla de Tarjetas -->
        <div class="tramites-grid">

            <div class="tramite-card" id="pago">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">💳</div>
                        <h3 class="tramite-card-title">Métodos de Pago</h3>
                    </div>
                    <p class="tramite-card-desc">Conocé las distintas vías de pago online, débito automático y tarjetas aceptadas.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Ir a pagar ➔</a>
                </div>
            </div>

            <div class="tramite-card" id="deuda">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">📄</div>
                        <h3 class="tramite-card-title">Consultar Deuda</h3>
                    </div>
                    <p class="tramite-card-desc">Revisá tu estado de cuenta actualizado y descargá tus facturas pendientes.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Consultar ➔</a>
                </div>
            </div>

            <div class="tramite-card" id="vencimiento">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">📅</div>
                        <h3 class="tramite-card-title">Próximos Vencimientos</h3>
                    </div>
                    <p class="tramite-card-desc">Verificá las fechas límite de pago para mantener tu suministro al día.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Ver calendario ➔</a>
                </div>
            </div>

            <div class="tramite-card" id="titularidad">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">📝</div>
                        <h3 class="tramite-card-title">Cambio de Titularidad</h3>
                    </div>
                    <p class="tramite-card-desc">Transferí la titularidad del servicio a un nuevo propietario o inquilino.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Iniciar trámite ➔</a>
                </div>
            </div>

            <div class="tramite-card" id="baja">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">⚠️</div>
                        <h3 class="tramite-card-title">Solicitar Baja</h3>
                    </div>
                    <p class="tramite-card-desc">Tramitá el retiro definitivo o corte temporal de tu medidor.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Solicitar baja ➔</a>
                </div>
            </div>

            <div class="tramite-card" id="reclamo">
                <div>
                    <div class="tramite-icon-title">
                        <div class="tramite-icon-box">📢</div>
                        <h3 class="tramite-card-title">Reclamos y Servicios</h3>
                    </div>
                    <p class="tramite-card-desc">Reportá cortes de luz, problemas de tensión o fallas técnicas en tu zona.</p>
                </div>
                <div>
                    <a href="#" class="btn-iniciar-tramite">Hacer reclamo ➔</a>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection