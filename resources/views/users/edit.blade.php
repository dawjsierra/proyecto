@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1>Actualización de estudios</h1>

        <form action="/users/{{$user->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="nombre">NOMBRE</label>
            <input type="text" name="name" value="{{$user->name}}"> 
        </div>

        <div>
            <label for="surname">APELLIDOS</label>
            <input type="text" name="surname" value="{{$user->surname}}"> 
        </div>

        <div>
            <label for="dni">DNI</label>
            <input type="text" name="dni" value="{{$user->dni}}"> 
        </div>

        <div>
            <label for="username">NOMBRE DE USUARIO</label>
            <input type="text" name="username" value="{{$user->username}}"> 
        </div>

        <div>
            <label for="email">email</label>
            <input type="text" name="email" value="{{$user->email}}"> 
        </div>

        <div>
            <label for="password">Contraseña</label>
            <input type="text" name="password" value=""> 
        </div>
        
        <div>
            <input type="submit" value="actualizar"> 
        </div>        
        </form>
        </div>
    </div>

</div>
@endsection