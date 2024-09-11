@extends('layouts.app')
  @if(Auth::user() -> passNumber === 'AA001' || Auth::user() -> passNumber === 'AA002')
    @section('leader_content')
      {{-- Kadra kierownicza - mała tabela --}}
      <table class="table table-striped table-hover">
        <thead>
          <tr>
              <th><center>Kadra kierownicza</center></th>
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
                  {{-- Zobacz szczegóły --}}
                  {{-- <button class="btn btn-warning btn-sm">
                    <a href="personalFile/{{ $object -> passNumber }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                    </a>
                  </button> --}}

                  {{-- Edytuj --}}
                  <a href="activateUserForm/{{ $object -> id }}">
                    <button type="button" class="btn btn-outline-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16"><path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </button>
                  </a>

                  {{-- Usuń --}}
                  {{-- <button class="btn btn-warning btn-sm">
                    <a href="deleteSoldierSoldier/{{ $object -> id }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg>
                    </a>
                  </button> --}}
                </center></td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    @endsection
  @else
    @section('user_content')
      <div class="alert alert-warning" role="alert">
        {{ Auth::user() -> firstName }} {{ Auth::user() -> lastName }} - Brak dostępu
      </div>
    @endsection
  @endif
