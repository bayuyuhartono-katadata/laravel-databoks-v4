<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">

    <title>Databoks</title>

    {{-- CSS STYLE --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('databoks-assets/css/template.css') }}">
    <link href="{{ asset('favicon/css/all.css') }}" rel="stylesheet">
        
    @stack('styles')
</head>

<body>
    <header>
        @include('layouts.header')
    </header>
    @stack('home-sliders')
    <div class="container">
        <div id="main" class="">
            @yield('content')
        </div>
    </div>
    <footer>
        @include('layouts.footer')
    </footer>

    {{-- JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @stack('scripts')
</body>

</html>
