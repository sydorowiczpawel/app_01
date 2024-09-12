@extends('layouts.app')
  @section('user_content')

  @foreach($veh as $object)
    <table>
      <thead>
        <td><center>{{$object -> manufacturer}} {{$object -> model}} nr {{ $object -> vehicle_number }} {{ __('- formularz edycji danych') }}</center></td>
      </thead>
    </table>
    @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
      <table>
        @foreach($users as $user)
          <tbody>
            <td>
              @if($object -> passNumber === $user -> passNumber)
                  <div class="card-header"><center>Obecny etatowy kierowca: {{ $user -> rank }} {{ $user -> firstName }} {{ $user -> lastName }} - {{ $user -> passNumber }}</center></div>
                @endif
            </td>
          </tbody>
        @endforeach
      </table>
    @endif

    <form method="POST" action="/storeChanges/{{$object -> id }}">
      @csrf

      {{-- Type driver's Pass Number --}}
      <div class="row mb-3">
        <label for="passNumber" class="col-md-4 col-form-label text-md-end">{{ __('Nr przepustki kierowcy') }}</label>
        <div class="col-md-6">
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
        </div>
      </div>

      {{-- Register button --}}
      <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
            {{ __('Przypisz kierowcę') }}
          </button>
        </div>
      </div>
    </form>
  @endforeach
@endsection