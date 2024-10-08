@extends('layouts.app')
@section('leader_content')

  <table class="table table-striped table-hover">
    <tbody>
      <th><center>Formularz dodawania pojadu</center></th>
    </tbody>
  </table>

  <form method="POST" action="/storeVehicle">
    @csrf

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

    <!-- Add Button -->
    <table class="table table-striped table-hover">
      <thead>
        <td><center>
          <button type="submit" class="btn btn-primary">{{ __('Dodaj pojazd') }}</button>
        </center></td>
      </thead>
    </table>
  </form>

@endsection