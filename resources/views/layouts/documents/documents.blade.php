@extends('layouts.app')
@section('user_content')

<?php
  $users = DB::table('users')
  ->get();

  $user = Auth::user();
  $p_num = ($user -> passNumber);

  // dd($p_num);

  $userDocs = DB::table('documents')
  ->where('passNumber', $p_num)
  ->get();
?>

{{-- Mała tabela --}}
<table class="table table-striped table-hover">
  <tbody>
    <th><center>DOKUMENTY</center></th>
  </tbody>
  <tbody>
    <th>
      <center>
        <a href="/newDocument">
          <button type="button" class="btn btn-outline-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
            </svg>
          </button>
        </a>
      </center>
    </th>
  </tbody>
</table>
{{-- Treść --}}
<table class="table table-striped table-hover">
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    <thead>
      <th>Seria/numer</th>
      <th><center>data wystawienia</center></th>
      <th><center>ważny do dnia</center></th>
      <th><center>za ifem</center></th>
    </thead>
    @foreach($doc as $object)
      <tbody>
        <td>{{ $object -> doc_name }}</td>
        <td><center>{{ $object -> start_date}}</center></td>
        <td><center>{{ $object -> end_date}}</center></td>
        <td><center>{{ $object -> passNumber }}</center></td>
      </tbody>
    @endforeach
  @else
    <thead>
      <th>Seria/numer</th>
      <th><center>data wystawienia</center></th>
      <th><center>ważny do dnia</center></th>
      <th><center></center></th>
    </thead>
    @foreach($userDocs as $userDoc)
      <tbody>
        <td>{{ $userDoc -> doc_name }}</td>
        <td><center>{{ $userDoc -> start_date}}</center></td>
        <td><center>{{ $userDoc -> end_date}}</center></td>
        <td>
          <center>
          </center>
        </td>
      </tbody>
    @endforeach
  @endif
</table>
@endsection

