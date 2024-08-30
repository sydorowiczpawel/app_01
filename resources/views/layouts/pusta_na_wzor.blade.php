@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif

    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>n1</th>
          <th><center>n2</center></th>
          <th><center>n3</center></th>
          <th><center>n4</center></th>
          <th><center>n5</center></th>
          <th><center>n6</center></th>
        </tr>
      </thead>

      <tbody>
          <tr>
            <td>k1</td>
            <td><center>k2</center></td>
            <td><center>k3</center></td>
            <td><center>k4</center></td>
            <td><center>k5</center></td>
            <td><center>k6</center></td>
          </tr>
      </tbody>
    </table>
