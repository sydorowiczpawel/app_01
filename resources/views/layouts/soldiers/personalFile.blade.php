@extends('layouts.app')
@section('user_content')
  @foreach($user as $object)
    {{-- Tabela NAGŁÓWEK --}}
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
            <th><center>Teczka personalna - {{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></th>
        </tr>
      </tbody>
    </table>
    {{-- Tabela PODSTAWOWE DANE --}}
    <table class="table table-striped table-hover">
      <thead>
        <td><center>id: {{ $object -> passNumber }}</center></td>
        <td><center>pluton: {{ $object -> platoon }}</center></td>
        <td><center>drużyna: {{ $object -> team }}</center></td>
        <td><center>
          {{-- Edytuj --}}
          <a href="editSoldier/{{ $object -> id }}">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
            </button>
          </a>

          {{-- Usuń --}}
          <a href="unactive/{{ $object -> id }}">
            <button class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
            </button>
          </a>
        </center></td>
      </thead>
    </table>

    {{-- Tabela POJAZDY --}}
    {{-- Nagłówek --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Pojazdy użytkownika</center></th>
        </tr>
      </thead>
    </table>
    {{-- Podstawowe dane pojazdów użytkownika --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Model</th>
          <th><center>Numer</center></th>
          <th><center></center></th>
        </tr>
      </thead>
      <tbody>
        @foreach($veh as $object)
        <tr>
          <td>{{ $object -> model }}</td>
          <td><center>{{ $object -> vehicle_number }}</center></td>
          <td><center>
              @foreach($user as $u)
                <a href="/showVehicle/{{ $object -> vehicle_number }}">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                  </button>
                </a>
                @endforeach
              </center></td>
            </tr>
            @endforeach
      </tbody>
    </table>

    {{-- DOKUMENTY --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Dokumenty</center></th>
        </tr>
      </thead>
    </table>
    {{-- Tabela z przyciskiem dodawania --}}
    <table class="table table-striped table-hover">
      <tbody>
        <td><center>
          <a href="/newDocument/{{ $object -> passNumber}}">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
              </svg>
            </button>
          </a>
        </center></td>
      </tbody>
    </table>
    {{-- Tabela z dokumentami --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td><center>Nazwa dokumentu</center></td>
          <td><center>Ważny od dnia</center></td>
          <td><center>Ważny do dnia</center></td>
          <td><center></center></td>
        </tr>
      </thead>
      <tbody>
        @foreach($doc as $object)
          <tr>
            <td><center>{{ $object -> doc_name }}</center></td>
            <td><center>{{ $object -> start_date }}</center></td>
            <td><center>{{ $object -> end_date }}</center></td>
            <td><center>
              <a href="/">
                <button type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></center>
                </button>
              </a>
            </center></td>
          </tr>
        @endforeach
      </tbody>
    </table>

    {{-- ROZKAZY WYJAZDU --}}
    {{-- Nagłówek --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Rozkazy wyjazdu przypisane do użytkownika</center></th>
        </tr>
      </thead>
    </table>
    {{-- Tabela z przyciskiem dodawania --}}
    <table class="table table-striped table-hover">
      <tbody>
        <td><center>
          <a href="/leaveForms/new_userID/{{ $object -> passNumber}}">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
              </svg>
            </button>
          </a>
        </center></td>
      </tbody>
    </table>
    {{-- Tabela z rozkazami wyjazdu --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td><center>Seria i numer</center></td>
          <td><center>Dotyczy pojazdu</center></td>
          <td><center>Licznik przed</center></td>
          <td><center>Licznik po</center></td>
          <td><center></center></td>
        </tr>
      </thead>
      <tbody>
        @foreach($l_f as $object)
        <tr>
            <td><center>{{ $object -> series }}</center></td>
            <td><center>{{ $object -> veh_id }}</center></td>
            <td><center>{{ $object -> km_before_use }}</center></td>
            <td><center>{{ $object -> km_after_use }}</center></td>
            <td><center>
              @if($object -> km_after_use !== NULL)
                <a href="/showLeaveForm/{{ $object -> id }}">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg></center>
                  </button>
                </a>
              @else
                <a href="/editLeaveForm/{{ $object -> id }}">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                    </svg>
                  </button>
                </a>
              @endif
            </center></td>
          </tr>
          @endforeach
      </tbody>
    </table>
  @endforeach
@endsection
