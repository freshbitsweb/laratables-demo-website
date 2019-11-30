<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt"
        crossorigin="anonymous">

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
    </style>
</head>
<body>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous">
    </script>
    <script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
        integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
        crossorigin="anonymous">
    </script>

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
            $("#many-to-many-poly-text").addClass("d-none");
            $("#basic-text").removeClass("d-none");
        });

        // Customize Column Example text Display
        $(document).on('click','#custom-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#many-to-many-poly-text").addClass("d-none");
            $("#customize-text").removeClass("d-none");
        });

        // One to One Example text Display
        $(document).on('click','#one-to-one-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#many-to-many-poly-text").addClass("d-none");
            $("#one-to-one-text").removeClass("d-none");
        });

        // One to Many Example text Display
        $(document).on('click','#one-to-many-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#many-to-many-poly-text").addClass("d-none");
            $("#one-to-many-text").removeClass("d-none");
        });

        // Many to Many Example text Display
        $(document).on('click','#many-to-many-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-poly-text").addClass("d-none");
            $("#many-to-many-text").removeClass("d-none");
        });

        // Many to Many Poly Example text Display
        $(document).on('click','#many-to-many-poly-dropdown-select',function(){
            $("#basic-text").addClass("d-none");
            $("#customize-text").addClass("d-none");
            $("#one-to-one-text").addClass("d-none");
            $("#one-to-many-text").addClass("d-none");
            $("#many-to-many-text").addClass("d-none");
            $("#many-to-many-poly-text").removeClass("d-none");
        });
    </script>
</body>
</html>
