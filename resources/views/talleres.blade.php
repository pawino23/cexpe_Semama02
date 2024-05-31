@extends('layouts.layout')

@section('title', 'Talleres')

@section('content')
    <div class="talleres-menu">
        <h1>Talleres</h1>
        <ul>
            <li><a href="{{ url('/talleres/danza') }}">Danza</a></li>
            <li><a href="{{ url('/talleres/baile') }}">Baile</a></li>
            <li><a href="{{ url('/talleres/oratoria') }}">Oratoria</a></li>
            <li><a href="{{ url('/talleres/liderazgo') }}">Liderazgo</a></li>
        </ul>
    </div>

    <div class="talleres-content">
        @yield('taller-content')
    </div>
@endsection