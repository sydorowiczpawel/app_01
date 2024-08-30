@extends('layouts.app')
  @section('user_content')
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        @foreach($veh as $object)
        <tr>
          <th>{{ $object -> manufacturer }}</th>
          <th><center>{{ $object -> model }}</center></th>
          <th><center>{{ $object -> vehicle_number }}</center></th>
        </tr>
        @endforeach
      </thead>
      <thead class="table-dark">
        <tr>
          <th>Rozkazy wyjazdu</th>
          <th></th>
          <th><center><button>a</button><button>z</button><button>w</button></center></th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>Nr rozkazu wyjazdu</td>
            <td><center>kierowca</center></td>
            <td><center><button>L</button><button>W</button></center></td>
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
  @endsection