<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Life with Books') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- header -->
    <header id="l-header">
        <div class="p-mainHeader">
            <div class="p-mainHeader__inner">
                
                <h1 class="p-mainHeader__tit">
                    <a href="{{ url('/') }}">Life with Books</a>
                </h1>
                <div class="c-menuTrigger js-toggle-sp-menu">
                    <span class="c-menuTrigger__bar js-toggle-sp-bar"></span>
                    <span class="c-menuTrigger__bar js-toggle-sp-bar"></span>
                    <span class="c-menuTrigger__bar js-toggle-sp-bar"></span>
                </div>
                <nav id="l-nav-menu" class="p-mainHeader__menu js-toggle-sp-menu-target">
                    <ul class="c-menu">
                        @guest
                            <li class="c-menu__item js-toggle-sp-menu-link">
                                <a class="p-mainHeader__btn" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="c-menu__item js-toggle-sp-menu-link">
                                <a class="p-mainHeader__btn" href="{{ route('admin.home') }}">マイページ</a>
                            </li>
                            <li class="c-menu__item js-toggle-sp-menu-link">
                                <a class="p-mainHeader__btn" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </nav>
            </div>
        </div>
    </header>{{-- /header --}}
    
    <main id="l-adminHome">
        @yield('content')
    </main>

</body>
</html>
