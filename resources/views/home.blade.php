@extends('layouts.app')
@section('user_content')

  <?php
    $user = Auth::user();
  ?>

  {{-- Nagłówek tabeli --}}
  <table class="table table-striped table-hover">
    <tbody>
      <th>{{ $user -> firstName }} {{ $user -> lastName }}</></th>
      <th>{{ $user -> passNumber }}</></th>
      <th><center>{{ date('d-m-Y') }}</center></th>
    </tbody>
  </table>
  {{-- jakiś if --}}
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif

  @if(Auth::user() -> is_active === 1 )
    {{-- Panel użytkownika --}}
    <table class="table table-striped table-hover">
      <thead>
        <td>
          <center>
            <a href="/documents">
              <button type="button" class="btn btn-outline-secondary">Dokumenty</button>
            </a>
          </center>
        </td>
        <td>
          <center>
            <a href="/vehicles">
              <button type="button" class="btn btn-outline-secondary">Pojazdy</button>
            </a>
          </center>
        </td>
        <td>
          <center>
            <a href="/leaveForms">
              <button type="button" class="btn btn-outline-secondary">Rozkazy wyjazdu</button>
            </a>
          </center>
        </td>
      </thead>
    </table>

    {{-- Karta informacyjna o żołnierzu --}}
    <table class="table table-striped table-hover">
      <thead>
        <th>
          <center>Karta informacyjna</center>
        </th>
      </thead>
    </table>
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
        <th><center>Nr przepustki</center></th>
        <th><center>stopień, Imię, Nazwisko</center></th>
        <th><center>zdjęcie</center></th>
      </tr>
      </tbody>
      <tbody>
        <tr>
          <td><center>{{ Auth::user() -> passNumber }}</center></td>
          <td><center>{{ Auth::user() -> rank }} {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }}</center></td>
          <td><center>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16">
              <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1m0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0"/>
              <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5m4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5"/>
            </svg>
          </center></td>
      </tr>
      </tbody>
    </table>
  @else
    <table class="table table-striped table-hover">
      <thead>
        <th>
          <center>Użytkownik niezweryfikowany</center>
        </th>
      </thead>
    </table>
  @endif
@endsection
