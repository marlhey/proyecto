@extends('admin.layouts.main')
@section('contenido')

<div class="d-flex justify-content-between">
    <h1 class="h3 mb-3">Agregar Producto</h1>
    <a href="{{ url('/admin/products') }}" class="btn btn-danger">
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



    <form action="{{ url('/admin/products/add') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group my-4">
            <label for="">Nombre:</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Nombre del Producto">
        </div>

        <div class="form-group my-4">
            <label for="">Slug:</label>
            <input name="slug" value="{{ old('salug') }}" type="text" class="form-control" placeholder="Slug">
        </div>

        <div class="form-group my-4">
            <label for="">Imagen del producto:</label>
            <input name="img" value="{{ old('img') }}" type="file" class="form-control"  accept="image/*">
        </div>

        <div class="form-group my-4">
            <label for="">Precio:</label>
            <input name="price" type="number" class="form-control" placeholder="price">
        </div>

        <div class="form-group my-4">
            <label for="">Categoria:</label>
            <select  name="category_id" value="{{ old('category_id') }}" id="" class="form-control">
                @foreach($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group my-4">
            <label for="">Descripción:</label>
            <input name="description" type="text" class="form-control" placeholder="Descripción del producto">
        </div>

        <div class="form-group my-4">
            <label for="">Existencias:</label>
            <input name="stock" type="number" class="form-control" placeholder="Existencias">
        </div>

        <div class="form-group my-4">
            <label for="">Estado</label>
            <input name="status" type="text" class="form-control" placeholder="Estado">
        </div>
        
        <div class="form-control my-4">
            <button class="btn btn-success" type="submit">
                <i class="align-middle" data-feather="save"></i>Guardar
            </button>
        </div>
    </form>


@endsection