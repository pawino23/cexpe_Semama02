<?php use App\Helpers\NavigationHelper; ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li class="{{ NavigationHelper::isActiveRoute('/') }}"><a href="{{ url('/') }}">Inicio</a></li>
                    <li class="{{ NavigationHelper::isActiveRoute('programas') }}"><a href="{{ url('/programas') }}">Programas</a></li>
                    <li class="{{ NavigationHelper::isActiveRoute('talleres') }}"><a href="{{ url('/talleres') }}">Talleres</a></li>
                    <li class="{{ NavigationHelper::isActiveRoute('asesoramiento') }}"><a href="{{ url('/asesoramiento') }}">Asesoramiento</a></li>
                    <li class="{{ NavigationHelper::isActiveRoute('contacto') }}"><a href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </body>
</html>