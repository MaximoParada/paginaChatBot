@extends('layouts.app')

@section('contenido')

<!-- Encabezado de Servicios -->
<section class="services-header">
    <div class="services-header-container">
        <div class="services-header-content">
            <h1 class="services-title">Soluciones eléctricas<br><span>para tu empresa u hogar</span></h1>
            <p class="services-subtitle">Servicios integrales de energía adaptados a tus necesidades con la máxima seguridad.</p>
        </div>
    </div>
</section>

<!-- Sección Principal de Servicios -->
<section class="services-section">
    <div class="services-container">

        <!-- Botones de Filtrado -->
        <div class="filter-switcher">
            <button type="button" class="filter-btn" data-filter="hogar">
                🏠 Particulares / Hogar
            </button>
            <button type="button" class="filter-btn" data-filter="empresa">
                🏢 Empresas / Comercio
            </button>
        </div>

        <!-- Grilla de Tarjetas -->
        <div class="services-grid">

            <div class="service-card" data-category="hogar">
                <div class="service-icon-header">
                    <div class="service-icon-bg">💡</div>
                    <h3 class="service-card-title">Instalaciones Residenciales</h3>
                </div>
                <p class="service-card-desc">
                    Cableado completo, montaje de tableros domiciliarios, llaves térmicas, disyuntores y puntos de luz según normativa vigente.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Hogar</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Solicitar ➔</a>
                </div>
            </div>

            <div class="service-card" data-category="hogar">
                <div class="service-icon-header">
                    <div class="service-icon-bg">🚨</div>
                    <h3 class="service-card-title">Urgencias 24/7</h3>
                </div>
                <p class="service-card-desc">
                    Atención rápida ante cortocircuitos, bajas de tensión o emergencias eléctricas en viviendas particulares.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Urgencias</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Solicitar ➔</a>
                </div>
            </div>

            <div class="service-card" data-category="hogar">
                <div class="service-icon-header">
                    <div class="service-icon-bg">📋</div>
                    <h3 class="service-card-title">Certificación y Protocolos</h3>
                </div>
                <p class="service-card-desc">
                    Inspección técnica de seguridad, puesta a tierra (jabalinas) y emisión de certificados aptos para habilitación.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Hogar</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Solicitar ➔</a>
                </div>
            </div>

            <div class="service-card" data-category="empresa">
                <div class="service-icon-header">
                    <div class="service-icon-bg">⚡</div>
                    <h3 class="service-card-title">Tableros Trifásicos</h3>
                </div>
                <p class="service-card-desc">
                    Diseño, armado y mantenimiento preventivo de tableros eléctricos industriales de alta demanda energética.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Empresas</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Cotizar ➔</a>
                </div>
            </div>

            <div class="service-card" data-category="empresa">
                <div class="service-icon-header">
                    <div class="service-icon-bg">📊</div>
                    <h3 class="service-card-title">Auditorías de Consumo</h3>
                </div>
                <p class="service-card-desc">
                    Estudio de eficiencia energética y corrección de factor de potencia para reducir penalizaciones en la factura.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Empresas</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Cotizar ➔</a>
                </div>
            </div>

            <div class="service-card" data-category="empresa">
                <div class="service-icon-header">
                    <div class="service-icon-bg">🛠️</div>
                    <h3 class="service-card-title">Mantenimiento Preventivo</h3>
                </div>
                <p class="service-card-desc">
                    Planes periódicos de revisión para comercios e industrias, minimizando paradas de producción imprevistas.
                </p>
                <div class="service-card-footer">
                    <span class="badge-category">Corporativo</span>
                    <a href="{{ url('/oficina') }}" class="btn-consultar">Cotizar ➔</a>
                </div>
            </div>

        </div>

        <!-- CTA Final -->
        <div class="cta-banner">
            <h2>¿Listo para contratar tu servicio?</h2>
            <p>Iniciá tu solicitud o trámite online en pocos pasos desde nuestra plataforma.</p>
            <a href="{{ url('/oficina') }}" class="btn-cta-oficina">
                Ir a Oficina Virtual ➔
            </a>
        </div>

    </div>
</section>

@endsection