@extends('layouts.app')

@section('content')
    <h1>Crear Categoría</h1>


    <form action="{{route('categories.store') }}" method="post">
        @csrf
        <div class="form group">
            <div class="mb-3"
                <label for="category_name" class="form-label">Nombre categoría</label>
                <input type="text" name="category_name" id="category_name" placeholder="category Name">
            </div>

            <div class="mb-3">
                <label for="active">Activa</label>
                <input type="checkbox" name="active" id="active" value="0">
            </div>
        <button class="btn btn primary" type="submit">Guardar</button>
        </div>
    </form>
@endsection