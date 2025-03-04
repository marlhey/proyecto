@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Descuentos</h1>
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de descuentos</h5></div>
                
                <div class="container p-5" >
                    
                                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave de descuento</th>
                                <th>Cantidad</th>
                                <th>Venta</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $descuentos)
                                <tr>
                                    <td>{{ $descuentos->id }}</td>
                                    <td>{{ $descuentos->discount_key}}</td> 
                                    <td>{{($descuentos->quantity) }}</td>
                                    <td>{{ $descuentos->sale_id}}</td> 
                                    <td>{{ $descuentos->state}}</td>
                                    <td><button class="btn btn-warning btnEdit" 
                                        data-id="{{$descuentos->id}}"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
                                    <td><form action="{{ route('discounts.destroy', $descuentos->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este estudiante?');">
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
 
