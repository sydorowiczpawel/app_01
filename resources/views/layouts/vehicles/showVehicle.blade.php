@extends('layouts.app')
@section('user_content')
  @foreach($veh as $object)
    {{-- Dane pojazdu - nagłówek --}}
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
          <th><center>{{ $object -> manufacturer }} {{ $object -> model }} nr {{ $object -> vehicle_number }}</center></th>
        </tr>
      </tbody>
    </table>

    {{-- Etatowy kierowca --}}
    <table class="table table-striped table-hover">
      <thead>
        @foreach($user as $us)
          @if($object -> passNumber === $us -> passNumber)
            <td>Etatowy kierowca:</td>
            <td>{{ $us -> rank }} {{ $us -> firstName }} {{ $us -> lastName }}</td>
            <td></td>
            @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
              <td>
                {{-- Edytuj --}}
                <a href="/editVehicle/{{ $object -> id }}">
                  <button type="button" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                  </button>
                </a>
              </td>
            @endif
          @endif
        @endforeach
      </thead>
    </table>

    {{-- Rozkazy wyjazdu - nagłówek --}}
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
          <th><center>Rozkazy wyjazdu</center></th>
        </tr>
      </tbody>
    </table>
    {{-- Rozkazy wyjazdu - treść --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>kierowca</th>
          <th><center>seria</center></th>
          <th><center>km przed</center></th>
          <th><center>km po</center></th>
          <th><center>
            <a href="/leaveForms/new/{{ $object -> id }}">
              <button type="button" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16"><path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
              </button>
            </a>
          </center></th>
        </tr>
      </thead>
      <thead>
        @foreach($order as $o)
          <tr>
            <td>{{$o -> user_id}}</th>
            <td><center>{{$o -> series}}</center></th>
            <td><center>{{$o -> km_before_use}}</center></th>
            @if($o ->km_after_use !== NULL)
              <td><center>{{$o -> km_after_use}}</center></th>
              <td><center>
              {{-- Zobacz szczegóły --}}
              <a href="/showLeaveForm/{{ $object -> id }}">
                <button type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                </button>
              </a>
              </center></td>
            @else
            <td><center>
              <a href="/editLeaveForm/{{ $o -> id }}">
                <button type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                </button>
              </a></center></th>
              <td><center></center></td>
            @endif
          </tr>
        @endforeach
      </thead>
    </table>

    {{-- Obsługi - nagłówek --}}
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
          <th><center>Obsługi</center></th>
        </tr>
      </tbody>
    </table>
    {{-- Obsługi - treść --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>k1</th>
          <th><center>k2</center></th>
          <th><center>k2</center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>k1</td>
          <td><center>k2</center></td>
          <td><center>k3</center></td>
        </tr>
      </tbody>
    </table>
  @endforeach
@endsection