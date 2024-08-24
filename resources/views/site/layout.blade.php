<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- Icones font awesome --}}
    <script src="https://kit.fontawesome.com/aa87691315.js" crossorigin="anonymous"></script>

    {{-- Icones do google --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    {{-- css e Javascript --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- css Materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    {{-- navbar --}}
    @include('partials.navbar')

    {{-- Slide --}}
    @include('partials.banner-slide')


    {{-- conteudo Principal --}}
    @yield('content')

    {{-- Rodapé --}}
    @include('partials.footer')

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Javascript Materialize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>
