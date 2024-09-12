@extends('layouts.app')
@section('user_content')

<?php
  $user = Auth::user();
?>

<table class="table table-striped table-hover">
  <tbody>
    <th>{{ $user -> firstName }} {{ $user -> lastName }}</></th>
    <th>{{ $user -> passNumber }}</></th>
    <th><center>{{ date('d-m-Y') }}</center></th>
  </tbody>
</table>
  @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
  @endif
  @if(Auth::user() -> is_active === 1 )
    <table>
      <thead>
        <td>
          <center>
            {{-- <a href="/userDocuments/{{ $user -> passNumber }}"> --}}
            <a href="/Documents">
              <button type="button" class="btn btn-outline-secondary">Dokumenty</button>
            </a>
          </center>
        </td>
        <td>
          <center>
            <a href="/Vehicles">
              <button type="button" class="btn btn-outline-secondary">Pojazdy</button>
            </a>
          </center>
        </td>
        <td>
          <center>
            <a href="/LeaveForms">
              <button type="button" class="btn btn-outline-secondary">Rozkazy wyjazdu</button>
            </a>
          </center>
        </td>
      </thead>
      <tbody>
        <td></td>
        <td></td>
        <td></td>
      </tbody>
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
