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
    </table
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
