@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
      <form method="POST" action="/storeDoc">
        <div class="card">
          <div class="card-body">
            @csrf
            {{-- Mała tabela --}}
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th><center>Utwórz nowy dokument</center></th>
                </tr>
              </thead>
            </table>

            <!-- Type document name -->
            <div class="form-group row">
              <label for="doc_name" class="col-md-4 col-form-label text-md-right">{{ __('Nazwa dokumentu') }}</label>
              <div class="col-md-6">
                <input id="doc_name" type="text" class="form-control" @error('doc_name') is-invalid @enderror name="doc_name" value="{{ old('doc_name') }}" required autocomplete="doc_name" autofocus>

                @error('doc_name')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

              </div>
            </div>

            <!-- Select document Owner -->
            <div class="form-group row">
              <label for="doc_owner" class="col-md-4 col-form-label text-md-right">{{ __('Wybierz właściciela') }}</label>
              <div class="col-md-6">
                <select id="doc_owner" type="text" class="form-control" @error('doc_owner') is-invalid @enderror name="doc_owner" required autocomplete="doc_owner" autofocus>
                  <option>--wybierz--</option>
                  @foreach($user as $u)
                  <option>{{ $u -> passNumber }}</option>
                  @endforeach
                </select>

                @error('doc_owner')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

              </div>
            </div>

            <!-- Type date from -->
            <div class="form-group row">
              <label for="from" class="col-md-4 col-form-label text-md-right">{{ __('Data wystawienia') }}</label>
              <div class="col-md-6">
                <input id="from" type="text" class="form-control" @error('from') is-invalid @enderror name="from" value="{{ old('from') }}" required autocomplete="from" autofocus>

                @error('from')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

              </div>
            </div>

            <!-- Type date to -->
            <div class="form-group row">
              <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('Data ważności dokumentu') }}</label>
              <div class="col-md-6">
                <input id="to" type="text" class="form-control" @error('to') is-invalid @enderror name="to" value="{{ old('to') }}" required autocomplete="to" autofocus>

                @error('to')
                  <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

                @error('doc_owner')
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
          </div>
        </div>
      </form>
    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Nie masz uprawnień aby tu być!
      </div>
    @endsection
  @endif
