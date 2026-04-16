<!doctype html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Proesync</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

    <div id="app" style="background-image: url({{ asset('img/fundo2.jpg') }}); background-size: cover; height: 100%;">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container-fluid">

                <a class="navbar-brand" href="{{ url('/') }}">

                    <img src="/img/logo-pq.png" alt="">

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">

                    <span class="navbar-toggler-icon"></span>

                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav ml-auto">
                       
                    </ul>

                </div>

            </div>

        </nav>
        <main class="py-2" style="height: 100vh;">
          
            
            @yield('content')

        </main>

    </div>

</body>

</html>

