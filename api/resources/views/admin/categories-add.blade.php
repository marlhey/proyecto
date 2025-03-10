@extends('admin.layouts.main')
@section('contenido')

<div class="d-flex justify-content-between">
    <h1 class="h3 mb-3">Agregar Categoria</h1>
    <a href="{{ url('/admin/categories') }}" class="btn btn-danger">
                        <i class="align-middle" data-feather="arrow-left"></i>
                        Volver
                    </a>
    </div>  

    @if($errors->any())
        <div class="alert bg-danger mt-4 p-4 text-white">
            <h5>Error:</h5>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <form action="{{ url('/admin/categories/add') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group my-4">
            <label for="">Nombre :</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Nombre de la categoria">
        </div>

        <div class="form-group my-4">
            <label for="">Descripción:</label>
            <input name="description" value="{{ old('description') }}" type="text" class="form-control" placeholder="Descripción">
        </div>

        <div class="form-group my-4">
            <label for="">Imagen:</label>
            <input name="image" type="file" class="form-control" placeholder="Imagen">
        </div>

        <div class="form-group my-4">
            <label for="">Estado:</label>
            <input name="state" type="text" class="form-control" placeholder="Estado">
        </div>
        
        <div class="form-control my-4">
            <button class="btn btn-success" type="submit">
                <i class="align-middle" data-feather="save"></i>Guardar
            </button>
        </div>
    </form>


@endsection