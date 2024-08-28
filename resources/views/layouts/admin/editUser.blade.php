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
    </nav>
    <main class="py-4">
<div class="container">
  @foreach($user as $object)
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{$object -> firstName}} {{$object -> lastName}} {{ __('- formularz aktywacji konta') }}</div>

        <div class="card-body">
          <form method="POST" action="/activateAccount/{{$object -> id }}">
            @csrf

{{-- Type pass number --}}
            <div class="row mb-3">
              <label for="passNumber" class="col-md-4 col-form-label text-md-end">{{ __('Nr przepustki') }}</label>
              <div class="col-md-6">
                <input id="passNumber" type="text" class="form-control @error('passNumber') is-invalid @enderror" name="passNumber" value="{{ old('passNumber') }}" required autocomplete="passNumber" autofocus>

                @error('passNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

{{-- Type first name --}}
            <div class="row mb-3">
              <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('Imię') }}</label>
              <div class="col-md-6">
                {{-- <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus> --}}
              <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ $object -> firstName }}</label>

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

{{-- Type last name --}}
            <div class="row mb-3">
              <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Nazwisko') }}</label>
              <div class="col-md-6">
                {{-- <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus> --}}
                <label for="firstName" class="col-md-4 col-form-label text-md-end">{{  $object -> lastName }}</label>

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

{{-- Type email address --}}
            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adres email') }}</label>

              <div class="col-md-6">
                {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> --}}
                <label for="firstName" class="col-md-4 col-form-label text-md-end">{{  $object -> email }}</label>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
  @endforeach


{{-- Register button --}}
            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Aktywuj konto') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</main>
</div>
</body>
</html>

