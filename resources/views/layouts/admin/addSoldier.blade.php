@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="POST" action="/storeSoldier">
      <div class="card">
        <div class="card-body">
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

<!-- Type rank -->
              <div class="form-group row">
                <label for="rank" class="col-md-4 col-form-label text-md-right">{{ __('Stopień') }}</label>
                <div class="col-md-6">
                  <select id="rank" type="text" class="form-control" @error('rank') is-invalid @enderror name="rank" required autocomplete="rank" autofocus>
                    <option>-- wybierz z listy --</option>
                    <option>szer.</option>
                    <option>st. szer.</option>
                    <option>kpr.</option>
                    <option>st. kpr.</option>
                    <option>plut.</option>
                    <option>st. plut.</option>
                    <option>sierż.</option>
                    <option>st. sierż.</option>
                    <option>mł. chor.</option>
                    <option>chor.</option>
                    <option>st. chor.</option>
                    <option>st. chor. sztab.</option>
                    <option>ppor.</option>
                    <option>por.</option>
                    <option>kpt.</option>
                    <option>mjr.</option>
                    <option>ppłk.</option>
                    <option>płk.</option>
                  </select>

                  @error('rank')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror
                </div>
              </div>

<!-- Type firstName -->
              <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('Imię') }}</label>
                <div class="col-md-6">
                  <input id="firstName" type="text" class="form-control" @error('firstName') is-invalid @enderror name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                  @error('firstName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type lastName -->
              <div class="form-group row">
                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>
                <div class="col-md-6">
                  <input id="lastName" type="text" class="form-control" @error('lastName') is-invalid @enderror name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                  @error('lastName')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type jobName -->
              <div class="form-group row">
                <label for="job_name" class="col-md-4 col-form-label text-md-right">{{ __('Etat') }}</label>
                <div class="col-md-6">
                  <select id="job_name" type="text" class="form-control" @error('job_name') is-invalid @enderror name="job_name" required autocomplete="job_name" autofocus>
                    <option>-- wybierz z listy --</option>
                    <option>dowódca kompanii</option>
                    <option>szef kompanii</option>
                    <option>technik kompanii</option>
                    <option>technik uzbrojenia</option>
                    <option>dowódca plutonu</option>
                    <option>pomocnik dowódcy plutonu</option>
                    <option>instuktor</option>
                    <option>kierowca - starszy instruktor</option>
                    <option>kierowca</option>
                  </select>

                  @error('job_name')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type coy -->
              <div class="form-group row">
                <label for="coy" class="col-md-4 col-form-label text-md-right">{{ __('Kompania') }}</label>
                <div class="col-md-6">
                  <select id="coy" type="text" class="form-control" @error('coy') is-invalid @enderror name="coy" required autocomplete="coy" autofocus>
                    <option>-- wybierz z listy --</option>
                    <option>26 kzs</option>
                  </select>

                  @error('coy')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type platoon -->
              <div class="form-group row">
                <label for="platoon" class="col-md-4 col-form-label text-md-right">{{ __('Pluton') }}</label>
                <div class="col-md-6">
                  <select id="platoon" type="text" class="form-control" @error('platoon') is-invalid @enderror name="platoon" required autocomplete="platoon" autofocus>
                    <option>-- wybierz z listy --</option>
                    <option>nie dotyczy</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                  </select>

                  @error('platoon')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type team -->
              <div class="form-group row">
                <label for="team" class="col-md-4 col-form-label text-md-right">{{ __('Drużyna') }}</label>
                <div class="col-md-6">
                  <select id="team" type="text" class="form-control" @error('team') is-invalid @enderror name="team" required autocomplete="team" autofocus>
                    <option>-- wybierz z listy --</option>
                    <option>nie dotyczy</option>
                    <option>pierwsza</option>
                    <option>druga</option>
                    <option>trzecia</option>
                    <option>czwarta</option>
                  </select>

                  @error('team')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type e-mail -->
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Type Password -->
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                  @enderror

                </div>
              </div>

<!-- Confirm Password -->
              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Powtórz hasło') }}</label>
                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>
            </div>
          </div>

<!-- Add Button -->
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">{{ __('Add Soldier') }}</button>
                </div>
              </div>

            </form>
      </div>
    </div>
  </div>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
@endsection