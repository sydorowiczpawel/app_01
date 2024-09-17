@extends('layouts.app')

@section('user_content')
  @if(Auth::user() -> job_name === 'admin' || Auth::user() -> job_name === 'dowódca kompanii')
    {{-- Tabela LEADERA z nagłówkiem strony --}}
    <table class="table table-striped table-hover">
      <thead>
        <th><center>ROZKAZY WYJAZDU</center></th>
      </thead>
    </table>
    {{-- Tabela z przyciskiem dodawania rozkazu --}}
    <table class="table table-striped table-hover">
      <tbody>
        <td><center>
          <a href="/leaveForms/new">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
              </svg>
            </button>
          </a>
        </center></td>
      </tbody>
    </table>

    {{-- Treść strony LEADERA--}}
    <table class="table table-striped table-hover">
      <thead>
        <th>numer</th>
        @if(Auth::user() -> job_name === 'admin' || Auth::user() -> job_name === 'dowódca kompanii')
          <th><center>kierowca</center></th>
        @endif
        <th><center>pojazd</center></th>
        <th><center>km przed</center></th>
        <th><center>km po</center></th>
      </thead>
      <tbody>
        @foreach($form as $object)
        <tr>
            @if($object -> km_after_use === NULL)
              {{-- Rozkaz niezakończony --}}
              <td>{{ $object -> series }}</td>
              @if(Auth::user() -> job_name === 'admin' || Auth::user() -> job_name === 'dowódca kompanii')
                <td><center>{{ $object -> user_id }}</center></td>
              @endif
              <td><center>{{ $object -> veh_id }}</center></td>
              <td></td>
              <td>
                <a href="/editLeaveForm/{{ $object -> id }}">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                      <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                    </svg>
                  </button>
                </a>
              </td>
            @else
              {{-- Rozkaz zakończony --}}
              <td>{{ $object -> series }}</td>
              @if(Auth::user() -> job_name === 'admin' || Auth::user() -> job_name === 'dowódca kompanii')
                <td><center>{{ $object -> user_id }}</center></td>
              @endif
              <td><center>{{ $object -> veh_id }}</center></td>
              <td><center>{{ $object -> km_before_use }}</center></td>
              <td><center>{{ $object -> km_after_use }}</center></td>
            @endif
          </tr>
          @endforeach
      </tbody>
    </table>

    {{-- Tabela z przyciskiem dodawania rozkazu --}}
    <table class="table table-striped table-hover">
      <tbody>
        <td><center>
          <a href="/leaveForms/new">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
              </svg>
            </button>
          </a>
        </center></td>
      </tbody>
    </table>
  @else
    {{-- Nagłówek USERA --}}
    <table class="table table-striped table-hover">
      <thead>
        <th><center>Rozkazy wyjazdu użytkownika {{ Auth::user() -> rank }} {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }}</center></th>
      </thead>
    </table>

    {{-- Treść strony USERA --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Seria i numer</th>
          <th><center>pojazd</center></th>
          <th><center>km przed</center></th>
          <th><center>km po</center></th>
        </tr>
      </thead>
      <tbody>
        @foreach($form as $object)
          <tr>
            @if(Auth::user() -> passNumber === $object -> user_id)
              <td>{{ $object -> series }}</td>
              <td><center>{{ $object -> veh_id }}</center></td>

              {{-- Rozkaz niezakończony --}}
              @if($object -> km_after_use === NULL)
                <td></td>
                <td>
                  <a href="/editLeaveForm/{{ $object -> id }}">
                    <button type="button" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                      </svg>
                    </button>
                  </a>
                </td>
              @else
                {{-- Rozkaz zakończony --}}
                <td><center>{{ $object -> km_before_use }}</center></td>
                <td><center>{{ $object -> km_after_use }}</center></td>
              @endif
            @endif
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
