@extends('layouts.app')
@section('user_content')
  @foreach($veh as $object)
    <table class="table table-striped table-hover">
      {{-- Dane pojazdu - nagłówek --}}
      <thead class="table-dark">
        {{-- Wyświetl dane wyświetlanego pojazdu --}}
        <tr>
          <th>{{ $object -> manufacturer }} {{ $object -> model }} nr {{ $object -> vehicle_number }}</th>
          <th><center></center></th>
          <th><center></center></th>
        </tr>
      </thead>
      {{-- Dane kierowcy --}}
      <tbody>
        {{-- Wyświetl dane etatowego kierowcy --}}
        @foreach($user as $us)
          <tr>
            <td>Etatowy kierowca:</td>
            <td></td>
            <td>{{ $us -> rank }} {{ $us -> firstName }} {{ $us -> lastName }}</td>
          </tr>
        @endforeach
      </tbody>
      {{-- Rozkazy wyjazdu - nagłówek --}}
      <thead class="table-dark">
        <tr>
          <td>Rozkazy wyjazdu</th>
          <td></td>
          {{-- New Leave Form Button --}}
          <td>
            <button class="btn btn-warning btn-sm">
              <a href="/newLeaveForm/{{ $object -> id }}/{{ $object -> passNumber }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus" viewBox="0 0 16 16"><path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/><path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/></svg>
              </a>
            </button>
          </td>
        </tr>
      </thead>
      {{-- Rozkaz wyjazdu lista --}}
      <tbody>
        <tr>
          @foreach($order as $object)
            <td>{{ $object -> series }}</td>
            @foreach($user as $u)
              @if($u -> passNumber === $object -> user_id )
                <td><center>{{ $u -> firstName }}</center></td>
              @endif
            @endforeach
            <td><center><button>L</button><button>W</button></center></td>
          @endforeach
        </tr>
      </tbody>
      <thead class="table-dark">
        <tr>
          <th>Obsługi</th>
          <th></th>
          <th></th>
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