
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Asiste')</title>

    <link rel="stylesheet" href="{{ asset('css/diseño principal.css') }}">
</head>
<!--mierda -->
<body>
    @include('components.navbar')  <!-- barra de navegacion la misma para todas las paginas-->

    <main>
        @yield('content')
    </main>

    @include('components.footer') <!-- el mismo footer (pie de pagina) para todas las paginas-->
<!-- porqueria -->  <!-- casi-->
</body>
</html>
