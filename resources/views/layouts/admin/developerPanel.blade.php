@extends('layouts.app')
@section('developer_content')

{{-- ADMIN ROUTINGS TABLE --}}
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th>Admin</th>
      <th></th>
    </tr>
  </thead>
  {{-- Unverified users --}}
  <tbody>
      <tr>
        <td><span>Route::get('/unverifiedUsers')</span></td><td>
          <button class="btn btn-warning btn-sm">
            <a href="/unverifiedUsers">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Activate account --}}
  <tbody>
      <tr>
        <td><span>Route::post('/activateAccount/{id}')</span></td>
        <td>
          {{-- <button class="btn btn-warning btn-sm">
            <a href="/activateAccount/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button> --}}
        </td>
      </tr>
  </tbody>
</table>

{{-- VEHICLE ROUTINGS TABLE --}}
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th>Vehicles</th>
      <th></th>
    </tr>
  </thead>
  {{-- All Vehicles --}}
  <tbody>
      <tr>
        <td><span>Route::get('/allVehicles')</span></td><td>
          <button class="btn btn-warning btn-sm">
            <a href="/allVehicles">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Add Vehicle --}}
  <tbody>
      <tr>
        <td><span>Route::get('/addVehicle')</span></td><td>
          <button class="btn btn-warning btn-sm">
            <a href="/addVehicle">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Show Vehicle --}}
  <tbody>
      <tr>
        <td><span>Route::get('/showVehicle/{id}')</span></td><td>
          <button class="btn btn-warning btn-sm">
            <a href="/showVehicle/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Edit Vehicle --}}
  <tbody>
      <tr>
        <td><span>Route::get('/editVehicle/{id}')</span></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/editVehicle/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Store Vehicle --}}
  <tbody>
    <tr>
      <td><span>Route::post('/storeVehicle')</span></td>
      <td>
        {{-- <button class="btn btn-warning btn-sm">
          <a href="/allDocuments">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button> --}}
      </td>
    </tr>
  </tbody>
  {{-- Delete Vehicle --}}
  <tbody>
      <tr>
        <td><span>Route::get('/deleteVehicle/{id}')</span></td>
        <td>
          {{-- <button class="btn btn-warning btn-sm">
            <a href="/allDocuments">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button> --}}
        </td>
      </tr>
  </tbody>
</table>

{{-- USER ROUTINGS TABLE --}}
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th>Users</th>
      <th></th>
    </tr>
  </thead>
  {{-- All soldiers --}}
  <tbody>
    <tr>
      <td><span>Route::get('/allSoldiers')</span></td>
      <td>
        <button class="btn btn-warning btn-sm">
          <a href="/allSoldiers">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button>
      </td>
    </tr>
  </tbody>
  {{-- Personal file --}}
  <tbody>
      <tr>
        <td><span>Route::get('/personalFile/{pass_number}')</span></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/personalFile/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Edit Soldier --}}
  <tbody>
      <tr>
        <td><span>Route::get('/editSoldier/{id}')</span></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/editSoldier/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Add soldier --}}
  <tbody>
    <tr>
      <td><span>Route::get('/addSoldier')</span></td>
      <td>
        <span class="btn btn-warning btn-sm">
          <a href="/addSoldier">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </span>
      </td>
    </tr>
  </tbody>
  {{-- Assign Soldier --}}
  <tbody>
      <tr>
        <td><span>Route::get('/assignSoldier/{id}')</span></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/assignSoldier/35">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
  {{-- Store assigned --}}
  <tbody>
      <tr>
        <td><span>Route::post('/storeAssigns/{id}')</span></td>
        <td>
          {{-- <button class="btn btn-warning btn-sm">
            <a href="/allDocuments">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button> --}}
        </td>
      </tr>
  </tbody>
  {{-- Store soldier --}}
  <tbody>
    <tr>
      <td><span>Route::post('/storeSoldier')</span></td>
      <td>
        {{-- <button class="btn btn-warning btn-sm">
          <a href="/allDocuments">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button> --}}
      </td>
    </tr>
  </tbody>
  {{-- Update soldier --}}
  <tbody>
      <tr>
        <td><span>Route::post('/updateSoldier/{id}')</span></td>
        <td>
          {{-- <button class="btn btn-warning btn-sm">
            <a href="/updateSoldier/1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button> --}}
        </td>
      </tr>
  </tbody>
  {{-- Delete soldier --}}
  <tbody>
    <tr>
      <td><span>Route::get('/deleteSoldier/{id}')</span></td>
      <td>
        {{-- <button class="btn btn-warning btn-sm">
          <a href="/allDocuments">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button> --}}
      </td>
    </tr>
  </tbody>
</table>

{{-- DOCUMENTS ROUTINGS TABLE --}}
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th>Documents</th>
      <th></th>
    </tr>
  </thead>
  {{-- All documents --}}
  <tbody>
      <tr>
        <td><span>Route::get('/allDocuments')</span></td>
        <td>
          <button class="btn btn-warning btn-sm">
            <a href="/allDocuments">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
            </a>
          </button>
        </td>
      </tr>
  </tbody>
</table>

{{-- DEPARTURE ORDERS ROUTINGS TABLE --}}
<table class="table table-striped table-hover">
  <thead class="table-dark">
    <tr>
      <th>Departure Orders</th>
      <th></th>
    </tr>
  </thead>
  {{-- All leave forms --}}
  <tbody>
    <tr>
      <td><span>Route::get('/allLeaveForms')</span></td>
      <td>
        <button class="btn btn-warning btn-sm">
          <a href="/allLeaveForms">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
          </a>
        </button>
      </td>
    </tr>
  </tbody>
</table>

@endsection