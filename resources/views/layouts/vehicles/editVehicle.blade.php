@extends('layouts.app')
@section('leader_content')
  @foreach($veh as $object)
    {{-- Nagłówek I - dane pojazdu--}}
    <table class="table table-striped table-hover">
      <thead>
        <th><center>{{ __('Formularz edycji danych pojazdu') }}</center></th>
      </thead>
      <tbody>
        <td><center>{{$object -> manufacturer}} {{$object -> model}} nr {{ $object -> vehicle_number }}</center></td>
      </tbody>
    </table>
    {{-- Nagłówek II - dane etatowego kierowcy--}}
    <table class="table table-striped table-hover">
      <tbody>
        <tr>
          @foreach($users as $user)
            <td>
              @if($object -> passNumber === $user -> passNumber)
                <center>Obecny etatowy kierowca: {{ $user -> rank }} {{ $user -> firstName }} {{ $user -> lastName }} - {{ $user -> passNumber }}</center>
              @endif
            </td>
          @endforeach
        </tr>
      </tbody>
    </table>

    <form method="POST" action="/storeChanges/{{$object -> id }}">
      @csrf

      {{-- Type driver's Pass Number --}}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <td for="passNumber"><center>Nr przepustki kierowcy</center></td>
            <td><center>
              <select id="passNumber" type="text" class="form-control" @error('passNumber') is-invalid @enderror name="passNumber" required autocomplete="passNumber" autofocus>
                <option>-- wybierz z listy --</option>
                @foreach($users as $user)
                  <option>{{ $user -> passNumber }}</option>
                @endforeach
              </select>

              @error('passNumber')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror

            </center></td>
          </tr>
        </thead>
      </table>

      {{-- Register button --}}
      <table class="table table-striped table-hover">
        <thead>
          <td><center>
            <button type="submit" class="btn btn-primary">
              {{ __('Przypisz kierowcę') }}
            </button>
          </center></td>
        </thead>
      </table>
    </form>
  @endforeach
@endsection