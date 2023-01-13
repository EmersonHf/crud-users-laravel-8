<!DOCTYPE html>
<html>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

<head>
    <title>Exemplo de CRUD com LARAVEL 8 </title>
</head>

<body>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mask/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/cep.js') }}"></script>
    <script src="{{ asset('js/cpf-formatting.js') }}"></script>
    @stack('scripts')


</body>

</html>
