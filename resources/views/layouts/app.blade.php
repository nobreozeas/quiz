<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Quiz</title>
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('css')
    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.mask.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert2.js')}}"></script>

</head>

<body>


    @yield('content')


    @stack('js')
</body>

</html>
