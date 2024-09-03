@extends('layouts.app')

@section('user_content')
  <div class="card-header"><b>{{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }}</b>{{ date('d-m-Y') }}</div>
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
  @if(Auth::user() -> is_active !== 0 )
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
  @else
    <center>Użytkownik niezweryfikowany</center>
  @endif
@endsection
