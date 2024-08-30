@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
    <table class="table table-striped table-hover">
      {{-- @foreach($users as $user) --}}
      @foreach($docs as $doc)
      <thead class="table-dark">
        <tr>
          {{-- <th>{{ $user -> rank }} {{ $user -> firstName }} {{ $user -> lastName }}</th> --}}
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th><center>action</center></th>
        </tr>
        {{-- @endforeach --}}
      </thead>
      
      <tbody>
        <tr>
          <td>{{ $doc -> doc_name }}</td>
          <td><center>{{ $doc -> start_date }}</center></td>
          <td><center>{{ $doc -> end_date }}</center></td>
          <td><center>{{ $doc -> passNumber }}</center></td>
          <td><center><button>S</button><button>E</button><button>D</button></center></td>
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
