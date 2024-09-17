@extends('layouts.app')
@section('user_content')

  <?php
  $soldier = Auth::user();
  ?>

  <form method="POST" action="/storeDocument">
    @csrf
    @if($soldier -> job_name === 'admin' || $soldier -> job_name === 'dowódca kompanii')
      {{-- Mała tabela --}}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><center>Utwórz nowy dokument</center></th>
          </tr>
        </thead>
      </table>
    @else
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><center>Utwórz nowy dokument {{ $soldier -> rank }} {{ $soldier -> firstName }} {{ $soldier -> lastName }}</center></th>
          </tr>
        </thead>
      </table>
    @endif

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
        @if($soldier -> job_name === 'admin' || $soldier -> job_name === 'dowódca kompanii')
          <select id="doc_owner" type="text" class="form-control" @error('doc_owner') is-invalid @enderror name="doc_owner" required autocomplete="doc_owner" autofocus>
            <option>--wybierz--</option>
            @foreach($user as $u)
              <option>{{ $u -> passNumber }}</option>
            @endforeach
          </select>
        @else
          <input id="doc_owner" type="text" class="form-control" @error('doc_owner') is-invalid @enderror name="doc_owner" value="{{ $soldier -> passNumber }}" required autocomplete="doc_name" autofocus>
        @endif
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
    <table class="table table-striped table-hover">
      <thead>
        <td><center>
        <button type="submit" class="btn btn-primary">{{ __('Zatwierdź zmiany') }}</button>
        </center></td>
      </thead>
    </table>
  </form>
@endsection
