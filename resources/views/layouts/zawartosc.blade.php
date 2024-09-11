@extends('layouts.soldiers.allSoldiers')
@section('table')
  <tr>
    <td>
      <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
    </td>
    <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
    <td><center>{{ $object -> job_name }}</center></td>
  </tr>
@endsection