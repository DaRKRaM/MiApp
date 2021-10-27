@extends('./layouts.plantilla')

@section ('title',  ' escort en ' . $escort->id)

@section ('content')

<p><a href="{{route('escorts.index')}}">Volver</a></p>
<h1>Escort {{$escort->name}}</h1>
<p>Descripción: {{$escort->description}}</p>
<p>Ciudad: {{$escort->category}}</p>

<p><a href="{{route('escorts.edit',$escort->id)}}">Editar</a></p>

<form action="{{route('escorts.destroy', $escort)}}" method="post">
    @method('delete')
    @csrf 

    <button type="submit">Eliminar</button>
</form>

@endsection