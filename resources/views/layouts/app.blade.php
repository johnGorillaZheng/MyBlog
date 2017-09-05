<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <nav class="nav has-shaddow">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="{{ route('home') }}">
                       <img src="#" alt="Zixuan Log" />
                    </a>
                    <a href="" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a href="" class="nav-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="" class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>
                <div class="nav-right" style="overflow: visible;">
                    @if(!Auth::guest())
                        <a href="#" class="nav-item is-tab">Login</a>
                        <a href="#" class="nav-item is-tab">Join my discussion</a>
                    @else
                        <button class="dropdown is-aligned-right nav-item is-tab">
                            Hey John! <span class="icon"><i class="fa fa-caret-down"></i></span>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Notification</a></li>
                                <li><a href="#">Settings</a></li>
                                <li class="seperator"></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
        </nav> 
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            //  Dropdowns
            $('.dropdown').hover(function(e) {
                $(this).toggleClass('is-open');
            });
        });
    </script>
</body>
</html>
