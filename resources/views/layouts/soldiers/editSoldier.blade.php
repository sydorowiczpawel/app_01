@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')

    <div class="card-body">
      @foreach($user as $object)
        <form method="POST" action="/updateSoldier/{{ $object -> id }}">
          @csrf
            <table class="table table-striped table-hover">
              <thead>
                  <th><center>{{  $object -> passNumber }} {{  $object -> firstName }} {{  $object -> lastName }}</center></th>
              </thead>
            </table>

            <!-- Type rank -->
            <div class="form-group row">
              <label for="rank" class="col-md-4 col-form-label text-md-right">{{ __('Stopień') }}</label>
              <div class="col-md-6">
                <select id="rank" type="text" class="form-control" @error('rank') is-invalid @enderror name="rank" required autocomplete="rank" autofocus>
                  <option>{{ $object -> rank }}</option>
                  <option>szer.</option>
                  <option>st. szer.</option>
                  <option>st. szer. spec.</option>
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

            <!-- Type jobName -->
            <div class="form-group row">
              <label for="job_name" class="col-md-4 col-form-label text-md-right">{{ __('Etat') }}</label>
              <div class="col-md-6">
                <select id="job_name" type="text" class="form-control" @error('job_name') is-invalid @enderror name="job_name" required autocomplete="job_name" autofocus>
                  <option>{{ $object -> job_name }}</option>
                  <option>dowódca kompanii</option>
                  <option>szef kompanii</option>
                  <option>technik kompanii</option>
                  <option>technik uzbrojenia</option>
                  <option>dowódca plutonu</option>
                  <option>pomocnik dowódcy plutonu</option>
                  <option>instruktor</option>
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
                  <option>{{ $object -> coy }}</option>
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
                  <option>{{ $object -> platoon }}</option>
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
                  <option>{{ $object -> team }}</option>
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

            <!-- Add Button -->
            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">{{ __('Zapisz zmiany') }}</button>
              </div>
            </div>
        </form>
      @endforeach
    </div>

    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif