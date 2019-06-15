<!-- kasutajate vaatamise lehe navbar -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', 'Laravel') }}</title>

        {{-- Styles --}}
        @if(config('laravelusers.enableBootstrapCssCdn'))
            <link rel="stylesheet" type="text/css" href="{{ config('laravelusers.bootstrapCssCdn') }}">
        @endif
        @if(config('laravelusers.enableAppCss'))
            <link rel="stylesheet" type="text/css" href="{{ asset(config('laravelusers.appCssPublicFile')) }}">
        @endif
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        @yield('template_linked_css')

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <li><a class="nav-link" href="{{ route('login') }}">Logi sisse</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">Registreeri</a></li>
                            @else
                                <li class="nav-item">  
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logi välja') }}
                                    </a>
          
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        {{-- Scripts --}}
        @if(config('laravelusers.enablejQueryCdn'))
            <script src="{{ asset(config('laravelusers.jQueryCdn')) }}"></script>
        @endif
        @if(config('laravelusers.enableBootstrapPopperJsCdn'))
            <script src="{{ asset(config('laravelusers.bootstrapPopperJsCdn')) }}"></script>
        @endif
        @if(config('laravelusers.enableBootstrapJsCdn'))
            <script src="{{ asset(config('laravelusers.bootstrapJsCdn')) }}"></script>
        @endif
        @if(config('laravelusers.enableAppJs'))
            <script src="{{ asset(config('laravelusers.appJsPublicFile')) }}"></script>
        @endif
        @include('laravelusers::scripts.toggleText')

        @yield('template_scripts')

    </body>
</html>
