@extends('./layouts.plantilla')

@section ('title', 'Editar Escort')

@section ('content')
<h1>Editar Escorts</h1>


<form action="{{route('escorts.update', $escort)}}" method="post">
    @method('put')

    @csrf

<label>
    Nombre: <br>
    <input name="name" type="text" value="{{old('name',$escort->name)}}"/><br><br>

</label>
@error('name')
  
    <small>{{$message}}</small>
    <br>
@enderror
<label>
    Descripción:<br>
    <textarea name="description" rows="5">{{old('description',$escort->description)}}</textarea><br><br>º  

</label>
@error('description')

<small>{{$message}}</small>
<br>
@enderror
<label>
    Categoría<br>
    <input name="category" type="text"  value="{{old('category',$escort->category)}}"/><br>

</label>
@error('category')

<small>{{$message}}</small>
<br>
@enderror
<p><button type="submit" >Enviar</button></p>

</form>
    
@endsection