@extends('layouts.app')
@section('user_content')
  @foreach($form as $object)
    {{-- Nagłówek --}}
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th><center>Formularz edycji</center></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><center>Rozkaz wyjazdu nr: {{$object -> series}}</center></td>
        </tr>
      </tbody>
    </table>
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
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <td><center>
              <button type="submit" class="btn btn-primary">
                {{ __('Zapisz zmiany') }}
              </button>
            </center></td>
          </tr>
        </thead>
      </table>
    </form>
  @endforeach
@endsection