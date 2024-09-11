@extends('layouts.app')
@section('developer_content')
  @foreach($user as $object)
    <div class="card-body">
      <form method="POST" action="/activateAccount/{{$object -> id }}">
        @csrf

        <table class="table table-striped table-hover">
          <tbody>
              <th><center>{{$object -> firstName}} {{$object -> lastName}} {{ __('- formularz aktywacji konta') }}</center></th>
          </tbody>
        </table>
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
        <table class="table table-striped table-hover">
          <tbody>
            <th>
                <center><button type="submit" class="btn btn-primary">{{ __('Aktywuj konto') }}</button></center>
            </th>
          </tbody>
        </table>
      </form>
    </div>
  @endforeach
@endsection


