@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Ventas</h1>
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de sales</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha de venta</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Estado</th>
                                <th>Pago</th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $sale)
                                <tr>
                                    <td>{{ $sale->id }}</td>
                                    <td>{{ $sale->sale_date}}</td> 
                                    <td>{{ $sale->cliente}}</td>
                                    <td>${{ number_format($sale->total, 2) }}</td>
                                    <td>{{ $sale->estatus }}</td>
                                    <td>{{ $sale->pagos}}</td>
                                    <td><button class="btn btn-warning btnEdit" 
                                        data-id="{{$sale->id}}"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</button></td>
                                </tr>
                            @endforeach 
                            
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection