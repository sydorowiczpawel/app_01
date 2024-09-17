@extends('layouts.app')
@section('user_content')

  <?PHP
    $user = Auth::user();
    $p_num = (Auth::user() -> passNumber);
    $userVeh = DB::table('tanks')
    ->where('passNumber', $p_num)
    ->get();
  ?>

  @if($user -> job_name === 'admin' || $user -> job_name === 'dowódca kompanii')
    {{-- Nagłówek LEADERA --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>POJAZDY</center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><center>
            <a href="addVehicle">
              <button type="button" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                </svg>
              </button>
            </a>
          </center></th>
        </tr>
      </tbody>
    </table>
  @else
    {{-- Nagłówek USERA --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Pojazdy użytkownika {{ $user -> rank }} {{ $user -> firstName }} {{ $user -> lastName }}</center></th>
        </tr>
      </thead>
    </table>
  @endif

  {{-- Treść --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Marka</th>
        <th><center>Model</center></th>
        <th><center>Numer</center></th>
      </tr>
    </thead>

    @if($user -> job_name === 'admin' || Auth::user() -> job_name === 'dowódca kompanii')
      <tbody>
        @foreach($vehicles as $object)
          <tr>
            <td>{{ $object -> manufacturer}}</td>
            <td><center>{{ $object -> model }}</center></td>
            <td>
              <center>
                @if( $object -> passNumber !== NULL )
                  <a href="showVehicle/{{ $object -> vehicle_number }}">
                    <button type="button" class="btn btn-outline-secondary">
                      {{ $object -> vehicle_number }}
                    </button>
                  </a>
                @else
                  {{-- Przypisz kierowcę --}}
                  <a href="editVehicle/{{ $object -> id }}">
                    <button type="button" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                      </svg>
                    </button>
                  </a>
                @endif
              </center>
            </td>
          </tr>
        @endforeach
      </tbody>
    @else
      <tbody>
        @foreach($userVeh as $object)
        <tr>
          <td>{{ $object -> manufacturer}}</td>
          <td><center>{{ $object -> model }}</center></td>
          <td>
            <center>
                <a href="showVehicle/{{ $object -> vehicle_number }}">
                  <button type="button" class="btn btn-outline-secondary">
                    {{ $object -> vehicle_number }}
                  </button>
                </a>
            </center>
          </td>
        </tr>
        @endforeach
      </tbody>
    @endif
  </table>
@endsection

