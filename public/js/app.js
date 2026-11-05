/**
 * ElectroNeuquén - Lógica Frontend General & Chatbot Foqui
 */

// ==========================================
// 0. VARIABLES Y FUNCIONES GLOBALES DEL BOT
// ==========================================
var botui;
let botIniciado = false;

/**
 * Muestra u oculta la ventana flotante del chatbot de Foqui
 */
function toggleChatbot() {
    const container = document.getElementById('botui-chat-container');
    if (!container) return;
    
    if (container.style.display === 'none' || container.style.display === '') {
        container.style.display = 'block';
        if (!botIniciado) {
            iniciarFoqui();
            botIniciado = true;
        }
    } else {
        container.style.display = 'none';
    }
}

/**
 * Inicializa la bienvenida de Foqui usando la librería BotUI
 */
function iniciarFoqui() {
    if (typeof BotUI === 'undefined') {
        console.error('La librería BotUI no está cargada en la vista.');
        return;
    }
    
    botui = new BotUI('foqui-botui-app');

    // Mensaje de saludo inicial
    botui.message.add({
        delay: 500,
        content: '¡Hola! Soy Foqui, tu asistente virtual. ¿En qué te puedo ayudar hoy?'
    }).then(function () {
        mostrarOpcionesFoqui();
    });
}

/**
 * Presenta las opciones del menú principal en el chat
 */
function mostrarOpcionesFoqui() {
    botui.action.button({
        delay: 400,
        action: [
            { text: 'Ver Facturas', value: 'facturacion' },
            { text: 'Reportar Corte', value: 'corte' },
            { text: 'Nuevas conexiones', value: 'conexion' },
            { text: 'Hablar con un agente', value: 'agente' }
        ]
    }).then(function (res) {
        enviarConsultaLaravel(res.value);
    });
}

/**
 * Envía la opción elegida o texto libre al controlador de Laravel mediante AJAX (fetch)
 */
function enviarConsultaLaravel(valor) {
    botui.message.add({ loading: true }).then(function (indexLoading) {
        
        const metaCsrf = document.querySelector('meta[name="csrf-token"]');
        const tokenCSRF = metaCsrf ? metaCsrf.getAttribute('content') : '';

        fetch('/api/chatbot-consulta', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': tokenCSRF,
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ consulta: valor })
        })
        .then(res => res.json())
        .then(data => {
            botui.message.update(indexLoading, {
                loading: false,
                content: data.respuesta || 'No recibí una respuesta válida.'
            }).then(mostrarOpcionesFoqui);
        })
        .catch(err => {
            botui.message.update(indexLoading, {
                loading: false,
                content: 'Ocurrió un error al conectar con el servidor.'
            }).then(mostrarOpcionesFoqui);
        });
    });
}


// ==========================================
// EVENTOS AL CARGAR EL DOM (VISTAS ESPECÍFICAS)
// ==========================================
document.addEventListener('DOMContentLoaded', function () {

    /* ==========================================
       1. COMPONENTES GLOBALES (NAVBAR & HEADER)
       ========================================== */
    (function initGlobalComponents() {
        const searchInput = document.querySelector('.pill-search input');
        if (searchInput) {
            searchInput.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                }
            });
        }
    })();

    /* ==========================================
       2. MÓDULO INICIO (HERO & INTERACCIONES)
       ========================================== */
    (function initHomeModule() {
        // Reservado para interacciones de la página principal
    })();

    /* ==========================================
       4. MÓDULO SERVICIOS (FILTRADO & ANIMACIONES)
       ========================================== */
    (function initServicesModule() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const serviceCards = document.querySelectorAll('.service-card');

        if (!filterButtons.length || !serviceCards.length) return;

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                const selectedCategory = this.getAttribute('data-filter');
                const isAlreadyActive = this.classList.contains('active');

                serviceCards.forEach(card => card.classList.add('fade-out'));

                setTimeout(() => {
                    if (isAlreadyActive) {
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        serviceCards.forEach(card => card.style.display = 'flex');
                    } else {
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        this.classList.add('active');

                        serviceCards.forEach(card => {
                            const cardCategory = card.getAttribute('data-category');
                            card.style.display = (cardCategory === selectedCategory) ? 'flex' : 'none';
                        });
                    }

                    setTimeout(() => {
                        serviceCards.forEach(card => card.classList.remove('fade-out'));
                    }, 50);

                }, 250);
            });
        });
    })();

    /* ==========================================
       6. MÓDULO OFICINA VIRTUAL (DROPDOWN & SCROLL)
       ========================================== */
    (function initOficinaModule() {
        const dropdownContainer = document.getElementById('tramiteDropdown');
        if (!dropdownContainer) return;

        const dropdownBtn = dropdownContainer.querySelector('.custom-dropdown-btn');
        const dropdownItems = dropdownContainer.querySelectorAll('.custom-dropdown-item');

        dropdownBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdownContainer.classList.toggle('active');
        });

        document.addEventListener('click', function () {
            dropdownContainer.classList.remove('active');
        });

        dropdownItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                dropdownContainer.classList.remove('active');

                const targetId = this.getAttribute('data-target');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    targetElement.style.borderColor = 'var(--brand-turquesa)';
                    setTimeout(() => {
                        targetElement.style.borderColor = '#ffffff';
                    }, 1500);
                }
            });
        });
    })();

});