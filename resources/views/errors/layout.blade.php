<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h2 class="display-4 text-center mt-5 text-danger">
        @yield ('message')
    </h2>

    <p class="text-center">
        <a href="{{ url()->previous() }}"  class="btn btn-primary btn-custom">Voltar</a>
        <a href="/"  class="btn btn-primary btn-custom">Página Inicial</a>
    </p>

    <script src="/js/app.js"></script>
</body>
</html>
