@extends('./layouts.plantilla')

@section ('title', 'Escorts en ' . $category)

@section ('content')
<h1>Escorts en {{$category}}</h1>
    <p>{{$category}}</p>
@endsection
