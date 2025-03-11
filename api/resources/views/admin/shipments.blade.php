@extends('admin.layouts.main')

@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Envíos</h1>
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de Envíos</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pedido</th>
                                <th>Cliente</th>
                                <th>Código Postal</th>
                                <th>Método de Envío</th>
                                <th>Costo de Envío</th>
                                <th>Estado</th>
                                <th>Fecha de Envío</th>
                                <th>Código de Seguimiento</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $envio)
                                <tr>
                                    <td>{{ $envio->id }}</td>
                                    <td>{{ $envio->venta}}</td> 
                                    <td>{{ $envio->cliente}}</td>
                                    <td>{{ $envio->mailing_address}}</td> 
                                    <td>{{ $envio->shipping_method }}</td>
                                    <td>{{ $envio->shipping_cost }}</td>
                                    <td>{{ $envio->status}}</td>
                                    <td>{{ $envio->shipping_date }}</td>
                                    <td>{{ $envio->tracking_code }}</td>
                                </tr>
                            @endforeach 
                            
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection


