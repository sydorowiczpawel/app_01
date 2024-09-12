@extends('layouts.app')
@section('user_content')

@foreach($tank as $object)
  @foreach($users as $user)
    <form method="POST" action="/storeDepartureOrder/{{ $object -> vehicle_number }}/{{ $user -> passNumber }}">
  @endforeach
    {{-- <div class="card"> --}}
      {{-- <div class="card-body"> --}}
        @csrf
          <table class="table table-striped table-hover">
            <thead>
              <th><center>Nowy rozkaz wyjazdu dla pojazdu {{ $object -> model }} {{ $object -> vehicle_number }}</center></th>
            </thead>
            <tbody>
                @foreach($driver as $d)
                <td><center>Etatowy kierowca: {{  $d -> rank }} {{  $d -> firstName }} {{  $d -> lastName }}, przepustka nr {{ $d -> passNumber }}</center></td>
                @endforeach
            </tbody>
          </table>
        @endforeach

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

        <!-- Select driver -->
        <div class="form-group row">
          <label for="driver" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz kierowcę') }}</label>
          <div class="col-md-6">
            @if(Auth::user()->passNumber === 'AA001' || Auth::user()->passNumber === 'AA002')
              <select id="driver" type="text" class="form-control" @error('driver') is-invalid @enderror name="driver" required autocomplete="driver" autofocus>
                @foreach($driver as $d)
                  <option>{{ $d -> passNumber }}</option>
                @endforeach
                @foreach($users as $us)
                <option>{{ $us -> passNumber }}</option>
                @endforeach
              </select>
            @else
              @foreach($driver as $d)
                <input id="driver" type="text" class="form-control" @error('driver') is-invalid @enderror name="driver" value="{{ $d -> passNumber }}" required autocomplete="driver" autofocus>
              @endforeach
            @endif

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
      {{-- </div> --}}
    {{-- </div> --}}
    </form>
@endsection