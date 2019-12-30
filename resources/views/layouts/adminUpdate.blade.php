
@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <form action="{{route ('adminUpdate')}}" method="POST">
        {{ csrf_field() }}
        <h3>Editar Rol</h3>
        <span>Nombre: </span><input value="{{$user->name}}" readonly><br><br>
        <span>Rol: </span>
        <select name="role">
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
        </select><br><br>
        <input name="id" value="{{$user->id}}" type="hidden"><br>
        <input type="submit" value="Enviar">
    </form>
</div>



@endsection
