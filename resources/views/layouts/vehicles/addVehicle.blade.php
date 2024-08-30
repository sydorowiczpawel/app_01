@extends('layouts.app')
@section('leader_content')

    <form method="POST" action="/storeVehicle">
    {{-- <div class="card">
      <div class="card-body"> --}}
          @csrf

      <!-- Type pass number -->
          <div class="form-group row">
            <label for="passNumber" class="col-md-4 col-form-label text-md-right">{{ __('Numer przepustki') }}</label>
            <div class="col-md-6">
              <input id="passNumber" type="text" class="form-control" @error('passNumber') is-invalid @enderror name="passNumber" value="{{ old('passNumber') }}" required autocomplete="passNumber" autofocus>

              @error('passNumber')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
              @enderror

            </div>
          </div>

      <!-- Type Manufacturer -->
            <div class="form-group row">
              <label for="manufacturer" class="col-md-4 col-form-label text-md-right">{{ __('Producent') }}</label>
              <div class="col-md-6">
                <select id="manufacturer" type="text" class="form-control" @error('manufacturer') is-invalid @enderror name="manufacturer" required autocomplete="manufacturer" autofocus>
                  <option>-- wybierz model z listy --</option>
                  <option>Radzieckie chujstwo</option>
                  <option>Polskie gówno</option>
                  <option>Abrams</option>
                </select>
                @error('manufacturer')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

              </div>
            </div>

      <!-- Select Model -->
            <div class="form-group row">
              <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model pojazdu') }}</label>
              <div class="col-md-6">
                <select id="model" type="text" class="form-control" @error('model') is-invalid @enderror name="model" required autocomplete="model" autofocus>
                  <option>-- wybierz model z listy --</option>
                  <option>T-72</option>
                  <option>PT91</option>
                  <option>M1A1</option>
                  <option>M1A2 sepV1</option>
                  <option>M1A2 sepV2</option>
                  <option>M1A2 sepV3</option>
                </select>

                @error('model')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

      <!-- Type Vehlice number -->
            <div class="form-group row">
              <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Numer pojazdu') }}</label>
              <div class="col-md-6">
                <input id="number" type="text" class="form-control" @error('number') is-invalid @enderror name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>

                @error('number')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

              </div>
            </div>

            <!-- Type platoon -->
            <div class="form-group row">
              <label for="platoon" class="col-md-4 col-form-label text-md-right">{{ __('Pluton') }}</label>
              <div class="col-md-6">
                <input id="platoon" type="text" class="form-control" @error('platoon') is-invalid @enderror name="platoon" value="{{ old('platoon') }}" required autocomplete="platoon" autofocus>
                @error('platoon')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
            </div>

      <!-- Add Button -->
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">{{ __('Dodaj pojazd') }}</button>
              </div>
            </div>

    </form>
  </div>
  {{-- </div> --}}
</div>

@endsection