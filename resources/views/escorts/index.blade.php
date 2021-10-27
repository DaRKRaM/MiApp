@extends('./layouts.plantilla')

@section ('title', 'home')

@section ('content')
<h1>Escorts Index</h1>
<a href="{{route('escorts.create')}}">Crear Escort</a>
    @foreach ($escorts as $escort)
    
      <li><a href="{{route('escorts.show', $escort)}}">{{$escort->name}}</a>
        <p>{{$escort->id}}</p></li>
        <p>{{$escort->description}}</p></li>
    @endforeach
</ul>

{{$escorts->links()}}
@endsection


