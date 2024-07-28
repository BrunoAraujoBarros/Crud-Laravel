<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container bg-dark">
    <div class="text-light col-6 mx-auto" style="padding-top: 100px;">
        <h3 class="d-flex justify-content-center align-items-center centered-div">@yield('Func')</h3>
    </div>
    <main class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg text-danger"> {{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </main>
    <div class="container mt-5">
        <form action="{{ route('cadastro.store') }}" method="POST">
            @csrf
            <!-- Nome -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
            </div>
            <!-- Data de Nascimento -->
            <div class="form-group">
                <label for="nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="nascimento" id="nascimento">
            </div>
            <!-- Número -->
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="tel" class="form-control" name="numero" id="numero" placeholder="Digite seu número">
            </div>
            <!-- Observações -->
            <div class="form-group" style="padding-bottom: 10px">
                <label for="obs">Observações</label>
                <textarea class="form-control" name="obs" id="obs" rows="3" placeholder="Digite suas observações"></textarea>
            </div>
            <!-- Botão de Enviar -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <form action="{{ route('listAll') }}" method="GET" style="padding-top:10px">
            <button type="submit" class="btn btn-primary">Ver cadastrados</button>
        </form>
    </div>
</body>
</html>
