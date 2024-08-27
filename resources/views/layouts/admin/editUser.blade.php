@extends('layouts.app')
@section('content')

<div class="container">
  @foreach($user as $object)
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
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

{{-- Type first name --}}
            <div class="row mb-3">
              <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('Imię') }}</label>
              <div class="col-md-6">
                {{-- <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus> --}}
              <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ $object -> firstName }}</label>

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

{{-- Type last name --}}
            <div class="row mb-3">
              <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Nazwisko') }}</label>
              <div class="col-md-6">
                {{-- <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus> --}}
                <label for="firstName" class="col-md-4 col-form-label text-md-end">{{  $object -> lastName }}</label>

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

{{-- Type email address --}}
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
    </div>
  </div>
</div>

  <footer class="py-16 text-center text-sm text-black dark:text-white/70">
      Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </footer>


@endsection