@extends('admin.layouts.main')
@section('contenido')

  <div class="app-content">
        <div class="container-fluid">
            <div class="row">

                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Agregar Descuento</h1>
                    <a href="{{ url('/admin/discounts') }}" class="btn btn-danger">
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

  
                    <form action="{{ url('/admin/discounts/add') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group my-4">
                            <label for="">Llave del Descuento:</label>
                            <input name="key" value="{{ old('key') }}" type="text" class="form-control" placeholder="ej: lasgomitas">
                        </div>

                        <div class="form-group my-4">
                            <label for="">Cantidad:</label>
                            <input name="quantity" value="{{ old('quantity') }}" type="number" class="form-control" placeholder="ej: 1">
                        </div>

                        <div class="form-group my-4">
                            <label for="">Venta:</label>
                            <input name="sale" type="number" class="form-control" placeholder="eje: 1">
                        </div>

                        <div class="form-group my-4">
                            <label for="">Estado:</label>
                            <input name="state" type="text" class="form-control" placeholder="ej : Activo ó inactivo">
                        </div>
                        
                        <div class="form-control my-4">
                            <button class="btn btn-success" type="submit">
                                <i class="align-middle" data-feather="save"></i>Guardar
                            </button>
                        </div>
                    </form> 
            </div>
        </div>
    </div>

@endsection