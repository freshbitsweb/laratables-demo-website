<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/prism_php.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    >
    @stack('styles')
    <style>
        .body-color {
            background-color: wheat;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            background-color: #f0f1f2;
        }
    </style>
</head>
<body class="body-color">
    <div class="container" id="header">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- Right Side Of Navbar --}}
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="https://github.com/freshbitsweb/laratables"
                                target="_blank"
                            >
                                Package Source
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    @yield('content')

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script  src="js/bootstrap.min.js"></script>

    <script src="js/prism_php.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>

    @stack('scripts')

    <script>
        $(".nav-pills .nav-item .nav-link:not(.nav-pills .nav-item.dropdown .nav-link), .dropdown-item").click(function(){
            $(".dropdown-item.active").removeClass('active');
        });
    </script>

    <script>
        {{-- Display Example name --}}
        $(document).on('click', '.dropdown-item', function() {
            displayExampleTitle("#" + $(this).data('example-text-element'));
        });

        function displayExampleTitle(elementId) {
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");

            $(elementId).removeClass("d-none");
        }
    </script>
</body>
</html>
