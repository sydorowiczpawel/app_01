@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')

    {{-- Leader content --}}
    @foreach($form as $object)
      <div class="card">
        <div class="card-header"><center>Rozkaz wyjazdu nr: {{$object -> series}} {{ __('- formularz edycji danych') }}</center></div>

        <div class="card-body">
          <form method="POST" action="storeChanges/{{$object -> id }}">
            @csrf
            {{-- Show kilometers before use --}}
            <div class="row mb-3">
              <label for="km_before" class="col-md-4 col-form-label text-md-end">{{ __('Kilometry przed wyjazdem') }}</label>
              <div class="col-md-6">
                <label for="km_before" class="col-md-4 col-form-label text-md-end">{{ $object -> km_before_use }}</label>
              </div>
            </div>
            {{-- Type kilometers after use --}}
            <div class="row mb-3">
              <label for="km_after" class="col-md-4 col-form-label text-md-end">{{ __('Kilometry po użyciu') }}</label>
              <div class="col-md-6">
                <input id="km_after" type="text" class="form-control @error('km_after') is-invalid @enderror" name="km_after" value="{{ old('km_after') }}" required autocomplete="km_after" autofocus>

                @error('km_after')
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
                  {{ __('Zapisz zmiany') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      @endforeach
      @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif