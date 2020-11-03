<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta http-equiv="refresh" content="90"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Админ панель') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('admin_assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <script src="https://kit.fontawesome.com/3e47064b43.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('admin_assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    {{ config('app.name', 'Админ панель') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if(\Auth::user()->role->name == 'Super Admin' || \Auth::user()->role->name == 'Admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/articles">Статьи</a>
                                </li>    
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/banners">Баннеры</a>
                                </li>    
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/brands">Бренды</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/orders">
                                        Заказы
                                        @if($new_orders > 0)
                                            <span class="badge badge-danger">{{$new_orders}}</span>
                                        @endif
                                        @if($processing_orders > 0)
                                            <span class="badge badge-success">{{$processing_orders}}</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/feedbacks">Отзывы</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin/products">Товары</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/users/{{ \Auth::user()->id }}">View Profile</a>
                                    @if(\Auth::user()->role->name == 'Super Admin' || \Auth::user()->role->name == 'Admin')
                                        <a class="dropdown-item" href="/admin/settings">Settings</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mt-5">
          {{-- Darkmode: {{ \Auth::user() && \Auth::user()->is_darkmode }} --}}
            @yield('content')
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        @yield('scripts')
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script>
            toastr.options.newestOnTop = false;
            toastr.options.showDuration = "1200";
            toastr.options.positionClass = "toast-top-center";
            @if(Session::get('success') != '')
                toastr.success("{{Session::get('success')}}");
            @elseif(Session::get('error') != '')
                toastr.error("{{Session::get('error')}}");
            @elseif(Session::get('warning') != '')
                toastr.warning("{{Session::get('warning')}}");
            @endif
        </script>
      </div>
</body>
</html>
