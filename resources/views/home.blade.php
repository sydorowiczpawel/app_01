@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header"><b>{{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }}</b>{{ date('d-m-Y') }}</div>

        <div class="card-body">
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif

          @if(Auth::user() -> passNumber !== NULL )
          <div class="navbar-nav ms-auto">

          <div class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <button class="nav-link" onclick="window.location.href='/dokumenty'">{{ __('Dokumenty') }}</button>
              </li>
            </div>
            <div class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <button class="nav-link" onclick="window.location.href='/dokumenty'">{{ __('Pojazdy') }}</button>
              </li>
            </div>
            <div class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <button class="nav-link" onclick="window.location.href='/dokumenty'">{{ __('Rozkazy wyjazdu') }}</button>
              </li>
            </div>
            <div class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <button class="nav-link" onclick="window.location.href='/dokumenty'">{{ __('Grafik') }}</button>
              </li>
            </div>

          </div>
                    @else
                        <center>Użytkownik niezweryfikowany</center>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
