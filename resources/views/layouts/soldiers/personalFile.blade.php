@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
    {{-- Mała tabela --}}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            @foreach($user as $object)
              <th><center>Teczka personalna - {{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></th>
            @endforeach
          </tr>
        </thead>
      </table>

      {{-- POJAZDY --}}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><center>Pojazdy</center></th>
          </tr>
        </thead>
      </table>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <td><center>Model</center></td>
            <td><center>Numer</center></td>
            <td><center></center></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($veh as $object)
              <td><center>{{ $object -> model }}</center></td>
              <td><center>{{ $object -> vehicle_number }}</center></td>
              <td><center>
                @foreach($user as $u)
                  <a href="/showVehicle/{{ $object -> vehicle_number }}/{{ $u -> passNumber }}">
                    <button type="button" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg>
                    </button>
                  </a>
                @endforeach
              </center></td>
            @endforeach
          </tr>
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
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><center>Rozkazy wyjazdu</center></th>
          </tr>
        </thead>
      </table>
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
              <td><center>{{ $object -> user_id }}</center></td>
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
    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif
