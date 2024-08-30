@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')

    {{-- Leader content --}}
    @foreach($veh as $object)
      <div class="card">
        <div class="card-header"><center>{{$object -> manufacturer}} {{$object -> model}} {{ __('- formularz edycji danych') }}</center></div>

        <div class="card-body">
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

            {{-- Type platoon --}}
            <div class="row mb-3">
              <label for="platoon" class="col-md-4 col-form-label text-md-end">{{ __('Pluton') }}</label>
              <div class="col-md-6">
                <input id="platoon" type="text" class="form-control @error('platoon') is-invalid @enderror" name="platoon" value="{{ old('platoon') }}" required autocomplete="platoon" autofocus>

                @error('platoon')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            {{-- Type new  Vehicle Number --}}
            <div class="row mb-3">
              <label for="vehicleNumber" class="col-md-4 col-form-label text-md-end">{{ __('Nr pojazdu') }}</label>
              <div class="col-md-6">
                <input id="vehicleNumber" type="vehicleNumber" class="form-control @error('vehicleNumber') is-invalid @enderror" name="vehicleNumber" value="{{ old('vehicleNumber') }}" required autocomplete="vehicleNumber">

                @error('vehicleNumber')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            @endforeach
            {{-- Register button --}}
            <div class="row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Aktywuj konto') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif