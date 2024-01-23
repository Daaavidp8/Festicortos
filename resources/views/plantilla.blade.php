<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('cabecera')
    </title>
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <script src="https://kit.fontawesome.com/9082f21abd.js" crossorigin="anonymous"></script>
</head>

<body class="container mt-3">

@include('partials.nav')

@yield('contenido')

</body>
</html>
