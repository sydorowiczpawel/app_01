<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav me-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <div class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                        @if (Route::has('login'))
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                        @endif

                        @if (Route::has('register'))
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                        @endif
                      @else
{{-- Gdy Administrator --}}
                        @if(Auth::user() -> passNumber === "AA001")
                          <li class="nav-item dropdown">
                            <button class="nav-link" onclick="window.location.href='/admin'">{{ __('Administrator') }}</button>
                          </li>
                          <div>
                            <li class="nav-item dropdown">
                              <button class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                              </button>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </div>
                        @else
{{-- Normal user --}}
                          <div>
                            <li class="nav-item dropdown">
                              <button class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Wyloguj') }}
                              </button>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          </div>
                        @endif
                      @endguest
                  </ul>
              </div>
          </div>
          <div>
          </nav>
            <div class='container'>
              <a href="allSoldiers"><button class="btn btn-outline-warning btn-sm" type="button">Żołnierze</button></a>
              <a href="allVehicles"><button class="btn btn-outline-warning btn-sm">Pojazdy</button></a>
              <a href="allDocuments"><button class="btn btn-outline-warning btn-sm">Dokumenty</button></a>
              <a href="allLeaveForms"><button class="btn btn-outline-warning btn-sm">Rozkazy wyjazdu</button></a>
              <a href="unverifiedUsers"><button class="btn btn-outline-warning btn-sm">Niezweryfikowani użytkownicy</button></a>
              {{-- <a href="addSoldier">
                <button class="btn btn-warning btn-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"><path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg>
                </button>
              </a> --}}
            </div>
          </div>

      <main class="py-4">
          @yield('content')
      </main>
  </div>
</body>
</html>
