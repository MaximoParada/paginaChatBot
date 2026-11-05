/**
 * ElectroNeuquén - Core JavaScript Suite
 * Arquitectura modular por secciones del sitio.
 */

document.addEventListener('DOMContentLoaded', function () {

    /* ==========================================
       1. COMPONENTES GLOBALES (NAVBAR & HEADER)
       ========================================== */
    (function initGlobalComponents() {
        // Reservado para lógica de búsqueda global o eventos de cabecera
        const searchInput = document.querySelector('.pill-search input');
        if (searchInput) {
            searchInput.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    // Eventual despacho de búsqueda global
                }
            });
        }
    })();

    /* ==========================================
       2. MÓDULO INICIO (HERO & INTERACCIONES)
       ========================================== */
    (function initHomeModule() {
        // Reservado para futuras animaciones de Foqui o triggers de trámites rápidos
    })();

    /* ==========================================
       4. MÓDULO SERVICIOS (FILTRADO & ANIMACIONES)
       ========================================== */
    (function initServicesModule() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const serviceCards = document.querySelectorAll('.service-card');

        if (!filterButtons.length || !serviceCards.length) return;

        /**
         * Maneja el cambio de estado visual y el filtrado por categoría
         * con una transición progresiva de desvanecimiento (fade-out/fade-in).
         */
        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                const selectedCategory = this.getAttribute('data-filter');
                const isAlreadyActive = this.classList.contains('active');

                // Paso 1: Transición de salida
                serviceCards.forEach(card => card.classList.add('fade-out'));

                setTimeout(() => {
                    // Paso 2: Toggle de estado o filtrado selectivo
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

                    // Paso 3: Transición de entrada
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

        /**
         * Control de apertura y cierre del selector custom de trámites.
         */
        dropdownBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            dropdownContainer.classList.toggle('active');
        });

        // Event listener global para desacoplar el menú si se clickea fuera del viewport del componente
        document.addEventListener('click', function () {
            dropdownContainer.classList.remove('active');
        });

        /**
         * Desplazamiento suave (smooth scroll) hacia el objetivo especificado en `data-target`
         * y resaltado temporal de foco visual sobre la tarjeta.
         */
        dropdownItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                dropdownContainer.classList.remove('active');

                const targetId = this.getAttribute('data-target');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Efecto de feedback visual temporizado
                    targetElement.style.borderColor = 'var(--brand-turquesa)';
                    setTimeout(() => {
                        targetElement.style.borderColor = '#ffffff';
                    }, 1500);
                }
            });
        });
    })();

});