<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="css/prism_php.css">

    <style>
        #example-name-display {
            color: orangered;
        }

        #btn-align {
            margin-top: 09px;
        }

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

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                Demo Source
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
        // Basic Example text Display
        $(document).on('click','#basic-dropdown-select',function(){
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");
            $("#basic-text").removeClass("d-none");
        });

        // Customize Column Example text Display
        $(document).on('click','#custom-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");
            $("#customize-text").removeClass("d-none");
        });

        // One to One Example text Display
        $(document).on('click','#one-to-one-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");
            $("#one-to-one-text").removeClass("d-none");
        });

        // One to Many Example text Display
        $(document).on('click','#one-to-many-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");
            $("#one-to-many-text").removeClass("d-none");
        });

        // Many to Many Example text Display
        $(document).on('click','#many-to-many-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").addClass("d-none");
            $("#many-to-many-text").removeClass("d-none");
        });

        // Many to Many Poly Example text Display
        $(document).on('click','#one-to-many-poly-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#one-to-many-poly-text").removeClass("d-none");
        });
    </script>
</body>
</html>
