<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fontes -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Estilos -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="container bg-dark">
        <main class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg text-danger"> {{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </main>
        <form action="{{ route('welcome') }}" method="GET" style="padding-top:10px">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        
        <div class="text-light col-6 mx-auto">
            <h3 class="d-flex justify-content-center align-items-center centered-div">@yield('Func')</h3>
        </div>
    </body>
</html>