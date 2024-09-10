@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
    {{-- Tabela wszystkich dokumentów personalnych --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Tabela dokumentów</center></th>
        </tr>
      </thead>
    </table>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <td><center>Nazwa</center></td>
          <td><center>ważny od</center></td>
          <td><center>ważny do</center></td>
          <td><center>właściciel</center></td>
          <td><center>
            <a href="/addDoc">
              <button class="btn btn-warning btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                </svg>
              </button>
            </a>
          </center></td>
        </tr>
      </thead>
      <tbody>
        @foreach($docs as $doc)
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
