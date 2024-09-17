@extends('layouts.app')
@section('leader_content')
  <form method="POST" action="/storeLeaveForm">
    @csrf
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Utwórz nowy rozkaz wyjazdu</center></th>
        </tr>
      </thead>
    </table>

    <!-- Type leave form series -->
    <div class="form-group row">
      <label for="series" class="col-md-4 col-form-label text-md-right">{{ __('Seria i numer rozkazu') }}</label>
      <div class="col-md-6">
        <input id="series" type="text" class="form-control" @error('series') is-invalid @enderror name="series" value="{{ old('series') }}" required autocomplete="series" autofocus>

        @error('series')
          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

      </div>
    </div>

    <!-- Select Vehicle -->
    <div class="form-group row">
      <label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz pojazd') }}</label>
      <div class="col-md-6">
        <select id="vehicle" type="text" class="form-control" @error('vehicle') is-invalid @enderror name="vehicle" required autocomplete="vehicle" autofocus>
          <option>--wybierz--</option>
          @foreach($veh as $v)
          <option>{{ $v -> vehicle_number }}</option>
          @endforeach
        </select>

        @error('vehicle')
          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
      </div>
    </div>

    <!-- Select driver -->
    <div class="form-group row">
      <label for="driver" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz kierowcę') }}</label>
      <div class="col-md-6">
        <select id="driver" type="text" class="form-control" @error('driver') is-invalid @enderror name="driver" required autocomplete="driver" autofocus>
          <option>--wybierz--</option>
          @foreach($users as $us)
          <option>{{ $us -> passNumber }}</option>
          @endforeach
        </select>

        @error('driver')
          <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
      </div>
    </div>

    <!-- Type km before use -->
    <div class="form-group row">
      <label for="km_before" class="col-md-4 col-form-label text-md-right">{{ __('Kilometry przed wyjazdem') }}</label>
      <div class="col-md-6">
        <input id="km_before" type="text" class="form-control" @error('km_before') is-invalid @enderror name="km_before" value="{{ old('km_before') }}" required autocomplete="km_before" autofocus>

        @error('km_before')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror

      </div>
    </div>

    <!-- Add Button -->
    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">{{ __('Zatwierdź zmiany') }}</button>
      </div>
    </div>
  </form>
@endsection