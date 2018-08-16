<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <!--        <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }}">-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/bootstrap.css') }}">

    <!-- Styles -->
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }

        .display {
            display: none;
        }

    </style>
    @yield('style')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="container-fluid">
    <div class="row h-100">
        <div class="col-2 border-right text-center px-0">
            <div class="list-group">
                <a href="<?= url("/"); ?>" class="list-group-item list-group-item-action" style="background-color:black;color:white">Fixawy</a> 
                @yield('li')
            </div>
        </div>
        <div class="col">
            @yield('content')
        </div>
    </div>

    <!-- Script -->
    @yield('js')
</body>

</html>
