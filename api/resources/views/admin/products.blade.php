@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Productos</h1>
                    <a href="{{ url('/admin/students/add') }}" class="btn btn-dark">
                                        <i class="align-middle" data-feather="plus"></i>
                                        Agregar
                                    </a>
                </div>  
            
                @if($mensaje = Session::get('message'))
                    <div class="alert bg-success p-4">
                        {{$mensaje}}
                    </div>
                @endif
            </div>
            <!--end::Row-->
    </div>
          <!--end::Container-->
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h5 class="mb-0">Listado de productos</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th>Imagen</th>
                                <th>Precio</th>
                                <th>Categoria</th>
                                <th>Descripción</th>
                                <th>Cantidad</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $productos)
                                <tr>
                                    <td>{{ $productos->id }}</td>
                                    <td>{{ $productos->name }}</td> 
                                    <td>{{($productos->slug) }}</td>
                                    <td>{{ $productos->img}}</td> 
                                    <td>{{ $productos->price}}</td>
                                    <td>{{ $productos->category_id}}</td>
                                    <td>{{ $productos->description}}</td>
                                    <td>{{ $productos->stock}}</td>
                                    <td>{{ $productos->status}}</td>
                                    <td><button class="btn btn-warning btnEdit" 
                                        data-name="{{$productos->name}}"
                                        data-id="{{$productos->id}}"
                                        data-category_id="{{$productos->category_id}}"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
                                    <td><form action="{{ route('products.destroy', $productos->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este producto?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
                                </tr>
                            @endforeach 
                            
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection
 