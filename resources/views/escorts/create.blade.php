@extends('./layouts.plantilla')

@section ('title', 'Alta de Escort')

@section ('content')
<h1>Alta para Escorts</h1>


<form action="{{route('escorts.store')}}" method="POST">

    @csrf

<label>
    Nombre: <br>
    <input name="name" type="text" value="{{old('name')}}"/><br>

</label>

@error('name')
  
    <small>{{$message}}</small>
    <br>
@enderror

<label>
    Descripción:<br>
    <textarea name="description" rows="5">{{old('description')}}</textarea><br>

</label>
@error('description')

<small>{{$message}}</small>
<br>
@enderror

<label>
    Categoría<br>
    <input name="category" type="text" value="{{old('category')}}" /><br>

</label>
@error('category')

<small>{{$message}}</small>
<br>
@enderror

<p><button type="submit" >Enviar</button></p>

</form>
    
@endsection