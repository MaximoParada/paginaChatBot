<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroNeuquén - Servicios Eléctricos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS de BotUI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/botui/build/botui.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/botui/build/botui-theme-default.css" />


    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

    @include('componentes.navbar')

    <main>
        @yield('contenido')
    </main>

    @include('componentes.footer')

    <!-- 1. Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- 2. Vue.js (Requerido por BotUI) -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    
    <!-- 3. Librería BotUI (URL Actualizada) -->
    <script src="https://cdn.jsdelivr.net/npm/botui/build/botui.min.js"></script>


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
</body>
</html>