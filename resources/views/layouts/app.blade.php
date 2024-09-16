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
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
          Strona główna
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto"></ul>

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
                    <button class="nav-link" onclick="window.location.href='/dev'">{{ __('Panel Programisty') }}</button>
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
    </nav>

    {{-- Treść na stronie --}}
    <div class="container">
      <div class="row justify-content-center">
        {{-- Admin's navbar --}}
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              {{-- Panel dowócy --}}
              @if(Auth::user() -> passNumber === "AA001")
                <table class="table table-stripped table-hover">
                  <thead>
                    <tr>
                      <th><center>Panel dowódcy</center></th>
                    </tr>
                  </thead>
                </table>
                <table class="table table-stripped table-hover">
                  <thead>
                    <tr>
                      <th><center><a href="/allSoldiers"><button class="btn btn-outline-warning btn-sm" type="button">Żołnierze</button></a></center></th>
                      <th><center><a href="/vehicles"><button class="btn btn-outline-warning btn-sm">Pojazdy</button></a></center></th>
                      <th><center><a href="/documents"><button class="btn btn-outline-warning btn-sm">Dokumenty</button></a></center></th>
                      <th><center><a href="/leaveForms"><button class="btn btn-outline-warning btn-sm">Rozkazy wyjazdu</button></a></center></th>
                      {{-- <th><a href="/unverifiedUsers"><button class="btn btn-outline-warning btn-sm">Niezweryfikowani użytkownicy</button></a></th> --}}
                    </tr>
                  </thead>
                </table>
              @endif
            </div>
            {{-- kontent administratora i dowódcy kompanii --}}
            @yield('leader_content')
            {{-- kontent żołnierzy --}}
            @yield('user_content')
            {{-- kontent niezalogowanego użytkownika --}}
            @yield('before_login_content')
            {{-- kontent niezalogowanego użytkownika --}}
            @yield('developer_content')
          </div>
        </div>
      </div>
      {{-- Stopka --}}
      <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
      </footer>
    </div>
  </div>
</body>
</html>
