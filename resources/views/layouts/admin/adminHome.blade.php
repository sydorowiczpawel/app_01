@extends('layouts.app')
@section('content')

<div class="container">
  <div class="grid-container">
    <div class="grid-item">
      <a href="/allSoldiers"><button class="btn btn-outline-warning btn-sm" type="button">Soldiers</button></a>
    </div>
    <div class="grid-item">
      <a href="/allTanks"><button class="btn btn-outline-warning btn-sm" type="button">Tanks</button></a>
    </div>
    <div class="grid-item">
      <a href="/allDocuments"><button class="btn btn-outline-warning btn-sm" type="button">Documents</button></a>
    </div>
    <div class="grid-item">
      <a href="/allLeaveForms"><button class="btn btn-outline-warning btn-sm" type="button">Leave Forms</button></a>
    </div>
    <div class="grid-item">
      <a href="/unverifiedUsers"><button class="btn btn-outline-warning btn-sm" type="button">Unverified Users</button></a>
    </div>
  </div>
    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
@endsection