<thead class="table table-bordered">
    <tr>
        <th class="{{ isActiveRoute('/') }}"><a href="{{ url('/') }}">Inicio</a></th>
        <th class="{{ isActiveRoute('programas') }}"><a href="{{ url('/programas') }}">Programas</a></th>
        <th class="{{ isActiveRoute('talleres') }}"><a href="{{ url('/talleres') }}">Talleres</a></th>
        <th class="{{ isActiveRoute('asesoramiento') }}"><a href="{{ url('/asesoramiento') }}">Asesoramiento</a></th>
        <th class="{{ isActiveRoute('contacto') }}"><a href="{{ url('/contacto') }}">Contacto</a></th>
    </tr>
</thead>