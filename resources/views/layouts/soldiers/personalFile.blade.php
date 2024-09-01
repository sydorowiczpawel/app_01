@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          @foreach($user as $object)
          <th>{{ $object -> rank}} {{ $object -> firstName }} {{ $object -> lastName }}</th>
          @endforeach
          <th><center></center></th>
          <th><center></center></th>
        </tr>
      </thead>
      <thead>
        <tr>
          <th>Pojazdy</th>
          <th><center></center></th>
          <th><center></center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Model</td>
          <td><center>numer</center></td>
          <td><center>akcja</center></td>
        </tr>
    </tbody>
      <tbody>
        @foreach($veh as $object)
          <tr>
            <td>{{ $object -> model }}</td>
            <td><center>{{ $object -> vehicle_number }}</center></td>
            <td><center>
              <button>L</button>
              <button>E</button>
              {{-- Usuń --}}
              <button class="btn btn-warning btn-sm">
                <a href="/deleteVehicle/{{ $object -> id }}">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                </a>
              </button></center></td>
          </tr>
          @endforeach
      </tbody>
      <thead>
        <tr>
          <th>Dokumenty</th>
          <th><center></center></th>
          <th><center></center></th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <td>Nazwa</td>
            <td><center>Seria</center></td>
            <td><center>Akcja</center></td>
          </tr>
      </tbody>
      <tbody>
          <tr>
            <td>Badania lekarskie</td>
            <td><center>BCC/0987/2024</center></td>
            <td><center><button>L</button><button>E</button><button>D</button></center></td>
          </tr>
      </tbody>
      <thead>
        <tr>
          <th>Rozkazy wyjazdu</th>
          <th><center></center></th>
          <th><center></center></th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <td>Seria i numer</td>
            <td><center>pojazd</center></td>
            <td><center>akcja</center></td>
          </tr>
      </tbody>
      <tbody>
          <tr>
            <td>DD-12345/OI</td>
            <td><center>T72</center></td>
            <td><center><button>L</button><button>E</button><button>D</button></center></td>
          </tr>
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
