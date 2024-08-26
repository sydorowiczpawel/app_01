@extends('layouts.app')
@section('content')

<div class="container">

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

</div>
@endsection