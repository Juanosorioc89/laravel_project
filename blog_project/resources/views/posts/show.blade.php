@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $post-> title }}</h1>
        <p>{{ $post-> content }}</p>
        <p>{{ $post-> created_at }}</p>
        <p>{{ $post-> updated_at }}</p>
        <a href=" {{ route ('post.edit', $post -> id)}}" class="btn btn-primary">Editar</a>
        <form action= {{ route ('post.destroy', $post -> id) }} method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection        