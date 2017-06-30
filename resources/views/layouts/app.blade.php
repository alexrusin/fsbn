<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FSBN') }}</title>

    <!-- Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

    </script>

</head>
<body>
    <div id="app">
        

        @yield('content')
    </div>
    <!-- Footer -->
          <section id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebk</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Insta</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribl</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                </ul>
                <div class="copyright">
                    <ul class="menu">
                        <li>&copy; Fashion Style Beauty Network. All rights reserved.</li><li>Design: Daniel Weber</li>
                    </ul>
                </div>
            </section>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('assets/js/skel.min.js') }}"></script>
    <script src="{{ asset('assets/js/util.js') }}"></script>
</body>
</html>
