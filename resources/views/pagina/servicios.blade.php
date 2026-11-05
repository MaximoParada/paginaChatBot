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
    <div class="services-container" style="max-width: 1100px; margin: 0 auto; padding: 20px;">

        
        <!-- Grilla de Tarjetas Desplegables (Grid de 3 Columnas) -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; width: 100%; margin-bottom: 40px;">

            <!-- 1. Instalaciones Residenciales -->
            <div class="service-card" data-category="hogar" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18h6m-5 3h4m-4-7.5c-1.2-1.2-2-2.7-2-4.5 0-3.3 2.7-6 6-6s6 2.7 6 6c0 1.8-.8 3.3-2 4.5V17H9v-3.5z"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Instalaciones Residenciales</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #f1f5f9; color: #0284c7; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Hogar</span>
                            <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Cableado completo, montaje de tableros domiciliarios, llaves térmicas, disyuntores y puntos de luz según normativa vigente.
                        </p>
                    </div>
                </details>
            </div>

            <!-- 2. Urgencias 24/7 -->
            <div class="service-card" data-category="hogar" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #fee2e2; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Urgencias 24/7</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #fee2e2; color: #ef4444; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Urgencias</span>
                            <span style="color: #ef4444; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Atención rápida ante cortocircuitos, bajas de tensión o emergencias eléctricas en viviendas particulares.
                        </p>
                    </div>
                </details>
            </div>

            <!-- 3. Certificación y Protocolos -->
            <div class="service-card" data-category="hogar" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <path d="M9 15l2 2 4-4"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Certificación y Protocolos</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #f1f5f9; color: #0284c7; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Hogar</span>
                            <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Inspección técnica de seguridad, puesta a tierra (jabalinas) y emisión de certificados aptos para habilitación.
                        </p>
                    </div>
                </details>
            </div>

            <!-- 4. Tableros Trifásicos -->
            <div class="service-card" data-category="empresa" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Tableros Trifásicos</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #f1f5f9; color: #0284c7; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Empresas</span>
                            <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Diseño, armado y mantenimiento preventivo de tableros eléctricos industriales de alta demanda energética.
                        </p>
                    </div>
                </details>
            </div>

            <!-- 5. Auditorías de Consumo -->
            <div class="service-card" data-category="empresa" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="20" x2="18" y2="10"></line>
                                <line x1="12" y1="20" x2="12" y2="4"></line>
                                <line x1="6" y1="20" x2="6" y2="14"></line>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Auditorías de Consumo</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #f1f5f9; color: #0284c7; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Empresas</span>
                            <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Estudio de eficiencia energética y corrección de factor de potencia para reducir penalizaciones en la factura.
                        </p>
                    </div>
                </details>
            </div>

            <!-- 6. Mantenimiento Preventivo -->
            <div class="service-card" data-category="empresa" style="background: #ffffff; border-radius: 16px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #f1f5f9; overflow: hidden;">
                <details style="cursor: pointer; padding: 28px 24px;">
                    <summary style="list-style: none; display: flex; flex-direction: column; align-items: center; text-align: center; outline: none;">
                        <div style="background-color: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center;">
                            <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="#0284c7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                            </svg>
                        </div>
                        <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Mantenimiento Preventivo</h3>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <span style="background-color: #f1f5f9; color: #0284c7; font-weight: 700; font-size: 0.75rem; padding: 6px 14px; border-radius: 20px; text-transform: uppercase;">Corporativo</span>
                            <span style="color: #0284c7; font-size: 0.85rem; font-weight: 600;">Ver detalle ▼</span>
                        </div>
                    </summary>
                    <div style="margin-top: 20px; pt-3; border-top: 1px solid #f1f5f9; text-align: center;">
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Planes periódicos de revisión para comercios e industrias, minimizando paradas de producción imprevistas.
                        </p>
                    </div>
                </details>
            </div>

        </div>

        <!-- Única tarjeta final con acción y redirección -->
        <div style="background-color: #ffffff; border: 2px solid #ffc107; border-radius: 16px; padding: 35px 20px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.05); margin-top: 20px;">
            <h2 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">¿Listo para contratar tu servicio?</h2>
            <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 20px;">Iniciá tu solicitud o trámite online en pocos pasos desde nuestra plataforma.</p>
            <a href="{{ url('/oficina') }}" style="background-color: #ffc107; color: #0f172a; font-weight: 700; padding: 12px 30px; border-radius: 50px; text-decoration: none; display: inline-block; font-size: 0.95rem; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
                Ir a Oficina Virtual
            </a>
        </div>

    </div>
</section>

@endsection