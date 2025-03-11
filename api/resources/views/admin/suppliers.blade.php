@extends('admin.layouts.main')

@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Proveedores</h1>
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de Proveedores</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre de Compañía</th>
                                <th>Contacto</th>
                                <th>Número de Teléfono de Compañía</th>
                                <th>Direccíon</th>
                                <th>Email</th>
                                <th>Sitio Web</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $proveedor)
                                <tr>
                                    <td>{{ $proveedor->id }}</td>
                                    <td>{{ $proveedor->name_company }}</td> 
                                    <td>{{ $proveedor->contact_id }}</td>
                                    <td>{{ $proveedor->phone }}</td> 
                                    <td>{{ $proveedor->address }}</td>
                                    <td>{{ $proveedor->email }}</td>
                                    <td>{{ $proveedor->web_site }}</td>
                                </tr>
                            @endforeach 
                            
                        </tbody>
                    </table>
                </div>
              
        </div>
    </div>
@endsection



