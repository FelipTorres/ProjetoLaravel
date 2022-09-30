<html>
    <head>
        <title>Cadastro</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            body{
                padding: 20px;
            }
            .navbar{
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @component('component_navbar', ["current" => $current ])
            @endcomponent
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

        @hasSection('javascript')
            @yield('javascript')
        @endif

    </body>
</html>
