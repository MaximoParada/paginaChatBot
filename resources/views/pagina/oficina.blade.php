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
    <div class="oficina-container" style="max-width: 1100px; margin: 0 auto; padding: 20px;">

        <!-- SECCIÓN 1: CONTRATAR SERVICIO -->
        <div style="background-color: #ffffff; border: 2px solid #ffc107; border-radius: 16px; padding: 24px; margin-bottom: 35px; display: flex; align-items: center; justify-content: space-between; gap: 200px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
            <div>
                <h2 style="font-size: 1.35rem; font-weight: 700; color: #1e293b; margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                    <svg viewBox="0 0 24 24" width="26" height="26" fill="#ffc107" stroke="#0056b3" stroke-width="1.5">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                    ¿Necesitás un nuevo servicio eléctrico?
                </h2>
                <p style="margin: 0; color: #64748b; font-size: 0.95rem;">Solicitá el alta de suministro o nuevas instalaciones para tu hogar, comercio o industria de forma 100% digital.</p>
            </div>
            <div>
                <a href="#" style="background-color: #ffc107; color: #0f172a; font-weight: 700; padding: 12px 24px; border-radius: 50px; text-decoration: none; display: inline-block; white-space: nowrap; box-shadow: 0 2px 6px rgba(0,0,0,0.1); font-size: 0.95rem;">
                    Solicitar Alta de Servicio
                </a>
            </div>
        </div>

        <!-- SECCIÓN 2: GESTIÓN DE TRÁMITES -->
        <div style="margin-bottom: 25px;">
            <h2 style="font-size: 1.6rem; font-weight: 700; color: #1e293b; margin: 0;">Gestión de Trámites</h2>
        </div>

        <!-- Grilla de Tarjetas Corrige Ancho (Grid de 3 Columnas Fijo) -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; width: 100%;">

            <!-- 1. Métodos de Pago -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Métodos de Pago</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Conocé las distintas vías de pago online, débito automático y tarjetas aceptadas.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Ir a pagar</a>
                </div>
            </div>

            <!-- 2. Consultar Deuda -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Consultar Deuda</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Revisá tu estado de cuenta actualizado y descargá tus facturas pendientes.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Consultar</a>
                </div>
            </div>

            <!-- 3. Próximos Vencimientos -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Próximos Vencimientos</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Verificá las fechas límite de pago para mantener tu suministro al día.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Ver calendario</a>
                </div>
            </div>

            <!-- 4. Cambio de Titularidad -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Cambio de Titularidad</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Transferí la titularidad del servicio a un nuevo propietario o inquilino.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Iniciar trámite</a>
                </div>
            </div>

            <!-- 5. Solicitar Baja -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Solicitar Baja</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Tramitá el retiro definitivo o corte temporal de tu medidor.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Solicitar baja</a>
                </div>
            </div>

            <!-- 6. Reclamos y Servicios -->
            <div style="background: #ffffff; border-radius: 16px; padding: 28px 24px; text-align: center; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9;">
                <div>
                    <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                        <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Reclamos y Servicios</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 24px;">Reportá cortes de luz, problemas de tensión o fallas técnicas en tu zona.</p>
                </div>
                <div>
                    <a href="#" style="background-color: #0284c7; color: #ffffff; font-weight: 700; padding: 12px 20px; border-radius: 50px; text-decoration: none; display: block; width: 100%; box-sizing: border-box; text-align: center; font-size: 0.95rem;">Hacer reclamo</a>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection