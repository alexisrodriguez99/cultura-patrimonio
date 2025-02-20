<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="csrf" name="csrf-token" content="{{ csrf_token() }}">

        <title>Patrimonio Cultura</title>
        <link rel="icon" href="{{ asset('img/favicon.ico') }}"/>

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        @stack('styles')
        @stack('scripts')

    </head>
    <body>
        <div class="">
            {{-- Menu Lateral --}}
             @include('sidebar')
            @include('offcanvas')

            {{-- Contenedor de la pagina excluyendo el menú lateral --}}
            <div class="contenedor-pagina">
                {{-- Encabezado pagina --}}
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <h1 class="text-celeste-argentina">Sistema de Patrimonio</h1>
                            </div>
                        </div>
                    </div>
                </header>
                {{-- Contenido de la pagina --}}
                <div class="content">

                    @yield('content')

                </div>   
                {{-- Footer --}}
                @include('footer')
            </div>
        </div>

    </body>

</html>
