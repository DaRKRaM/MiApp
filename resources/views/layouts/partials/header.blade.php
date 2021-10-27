<header>
    <nav>
        <ul>
            <li><a href="{{route('escorts.index')}}" class="{{request()->routeIs('escorts.index') ? 'active' : ''}}">Home</a></li>
            
            <li><a href="{{route('escorts.create')}}" class="{{request()->routeIs('escorts.create') ? 'active' : ''}}">Nueva Escort</a></li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
        </ul>

    </nav>
</header>