@extends('layouts.app')
@section('leader_content')
  {{-- Kadra kierownicza - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <td><center>
          <a href="/newSoldier">
            <button type="button" class="btn btn-outline-secondary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8M6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5M1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
              </svg>
            </button>
          </a>
        </center></td>
      </tr>
    </thead>
    <tbody>
      <tr>
          <th><center>Kadra kierownicza</center></th>
      </tr>
    </tbody>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th><center>funkcja</center></th>
      </tr>
    </thead>

    {{-- Dowódca kompanii --}}
    <tbody>
      @foreach($commander as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- Szef Kompanii --}}
      @foreach($boss as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- Technik kompanii --}}
      @foreach($technician as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- Technik uzbrojenia --}}
      @foreach($gun_technician as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Pluton I - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Pluton I</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th><center>funkcja</center></th>
      </tr>
    </thead>
    <tbody>
      {{-- dowódca plutonu --}}
      @foreach($p1_c as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- pomocnik dowódcy plutonu --}}
      @foreach($p1_pdp as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- instruktor --}}
      @foreach($p1_ins as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca - starszy instruktor --}}
      @foreach($p1_od as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca --}}
      @foreach($p1_d as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Pluton II - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Pluton II</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th><center>funkcja</center></th>
      </tr>
    </thead>
    <tbody>
      {{-- dowódca plutonu --}}
      @foreach($p2_c as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- pomocnik dowódcy plutonu --}}
      @foreach($p2_pdp as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- instruktor --}}
      @foreach($p2_ins as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca - starszy instruktor --}}
      @foreach($p2_od as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca --}}
      @foreach($p2_d as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Pluton III - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Pluton III</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th><center>funkcja</center></th>
      </tr>
    </thead>
    <tbody>
      {{-- dowódca plutonu --}}
      @foreach($p3_c as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- pomocnik dowódcy plutonu --}}
      @foreach($p3_pdp as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- instruktor --}}
      @foreach($p3_ins as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca - starszy instruktor --}}
      @foreach($p3_od as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca --}}
      @foreach($p3_d as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Pluton IV - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Pluton IV</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th><center>funkcja</center></th>
      </tr>
    </thead>
    <tbody>
      {{-- Dowódca plutonu --}}
      @foreach($p4_c as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- Pomocnik dowódcy plutonu --}}
      @foreach($p4_pdp as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- instruktor --}}
      @foreach($p4_ins as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca - starszy instruktor --}}
      @foreach($p4_od as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
      {{-- kierowca --}}
      @foreach($p4_d as $object)
      <tr>
        <td>
          <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
        </td>
        <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
        <td><center>{{ $object -> job_name }}</center></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{-- Zweryfikowani - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Zweryfikowani</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>stopień Imię i Nazwisko</center></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($others as $object)
        @if($object -> passNumber !== NULL)
        <tr>
          <td>
            <a href="/personalFile/{{ $object -> passNumber }}"><button type="button" class="btn btn-outline-secondary">{{ $object -> passNumber }}</button></a>
          </td>
          <td><center>{{ $object -> rank }} {{ $object -> firstName }} {{ $object -> lastName }}</center></td>
          <td><center>{{ $object -> job_name }}</center></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        @endif
      @endforeach
    </tbody>
  </table>

  {{-- Niezweryfikowani - mała tabela --}}
  <table class="table table-striped table-hover">
    <thead>
      <tr>
          <th><center>Niezweryfikowani</center></th>
      </tr>
    </thead>
  </table>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>nr. przepustki</th>
        <th><center>Imię i Nazwisko</center></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($others as $object)
        @if($object -> passNumber === NULL)
          <tr>
            <td>brak</td>
            <td><center>{{ $object -> firstName }} {{ $object -> lastName }}</center></td>
            <td></td>
            <td></td>
            <td></td>
            <td><center>
              {{-- Edytuj --}}
              <a href="activateUserForm/{{ $object -> id }}">
                <button type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                </button>
              </a>
            </center></td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
@endsection
