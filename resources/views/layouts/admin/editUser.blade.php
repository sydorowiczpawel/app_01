@extends('layouts.app')
@section('developer_content')
  @foreach($user as $object)
    <div class="card-header">{{$object -> firstName}} {{$object -> lastName}} {{ __('- formularz aktywacji konta') }}</div>
      <div class="card-body">
        <form method="POST" action="/activateAccount/{{$object -> id }}">
          @csrf

          {{-- Type pass number --}}
          <div class="row mb-3">
            <label for="passNumber" class="col-md-4 col-form-label text-md-end">{{ __('Nr przepustki') }}</label>
            <div class="col-md-6">
              <input id="passNumber" type="text" class="form-control @error('passNumber') is-invalid @enderror" name="passNumber" value="{{ old('passNumber') }}" required autocomplete="passNumber" autofocus>

              @error('passNumber')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>

          {{-- Show email address --}}
          <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Adres email') }}</label>

            <div class="col-md-6">
              {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> --}}
              <label for="firstName" class="col-md-4 col-form-label text-md-end">{{  $object -> email }}</label>

              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          {{-- Register button --}}
          <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">{{ __('Aktywuj konto') }}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  @endforeach
@endsection


