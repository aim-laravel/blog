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
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <div class="navbar-brand">
                        <a class="navbar-item is-paddingless" href="{{route('home')}}">
                            <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer logo">
                        </a>
                    </div>
                    <a class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                    <a class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                <span class="navbar-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="navbar-end" style="overflow: visible;">
                    <a class="navbar-item is-tab is-hidden-tablet is-active">Learn</a>
                    <a class="navbar-item is-tab is-hidden-tablet">Discuss</a>
                    <a class="navbar-item is-tab is-hidden-tablet">Share</a>
                    @guest
                    <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                    <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
                    @else
                    <button class="navbar-item is-tab dropdown-toggle">
                        <figure class="image is-16x16" style="margin-right: 8px;">
                            <img src="http://bulma.io/images/jgthms.png">
                        </figure>
                    </button>
                    <button class="dropdown is-aligned-right navbar-item is-tab">
                        Hey {{ auth()->user()->name }}
                        <span class="icon">
                            <i class="fa fa-caret-down"></i>
                        </span>
                        <ul class="dropdown-menu" style="overflow: visible;">
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                                    </span>Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-fw fa-bell m-r-5"></i>
                                    </span>Notifications
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <i class="fa fa-fw fa-cog m-r-5"></i>
                                    </span>Settings
                                </a>
                            </li>
                            <li class="seperator"></li>
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <span class="icon">
                                        <i class="fa fa-fw fa-sign-out m-r-5"></i>
                                    </span>
                                    Logout
                                </a>
                            </li>
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
</body>

</html>
