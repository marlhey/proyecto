@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Pagos</h1>
                  
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de pagos</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Pago</th>
                                <th>Metodo de Pago</th>
                                <th>Estado de Pago</th>
                                <th>Fecha de Pago</th>
                                <th>Referencia de transacción</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $pagos)
                                <tr>
                                    <td>{{ $pagos->id }}</td>
                                    <td>{{ $pagos->cliente}}</td> 
                                    <td>{{($pagos->payment) }}</td>
                                    <td>{{ $pagos->metodo}}</td> 
                                    <td>{{ $pagos->status}}</td>
                                    <td>{{ $pagos->payment_date}}</td>
                                    <td>{{ $pagos->transaction_reference}}</td>
                                 </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection
 

