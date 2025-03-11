
@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Clientes</h1>
                    <a href="{{ url('/admin/sales/add') }}" class="btn btn-dark">
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de Clientes</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Número de Teléfono</th>
                                <th>Dirección</th>
                                <th>RFC</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->customer_id }}</td> 
                                    <td>{{ $cliente->number_phone }}</td>
                                    <td>{{ $cliente->address }}</td> 
                                    <td>{{ $cliente->rfc }}</td>
                                
                                </tr>
                            @endforeach 
                        
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection



