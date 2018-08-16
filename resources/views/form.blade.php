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
    
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<!--    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awsome.css')}}">-->

    <!-- Styles -->
    <style>
        html,
        body {
            padding: 0;
            margin: 0;
            height: 100%;
            width: 100%;
        }
        
        main {
            margin: auto ;
            max-width: 50%;
        }
    </style>
    @yield('style')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <main class="border px-3 py-1 my-3">
        <a href="{{route('admin')}}" class="btn btn-outline-primary my-2" id="back"><i class="fas fa-angle-double-left"></i> Back</a>
        @yield('content')
    </main>
    <!-- Script -->
    @yield('js')
    <script>


    </script>
</body>

</html>
