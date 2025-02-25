@extends('admin.layouts.main')
@section('contenido')
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Productos</h3></div>
              

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
                          {{-- @foreach($ventas as $venta)
                              <tr>
                                  <td>{{ $venta->id }}</td>
                                  <td>{{ $venta->cliente->nombre }}</td> 
                                  <td>${{ number_format($venta->pago, 2) }}</td>
                                  <td>{{ $venta->metodoPago->nombre }}</td> 
                                  <td>{{ $venta->estado }}</td>
                                  <td>{{ $venta->fecha_de_pago }}</td>
                              </tr>
                          @endforeach 
                          --}}
                      </tbody>
                  </table>
              </div>
                
            
            </div>
            <!--end::Row-->
        </div>
          <!--end::Container-->
    </div>
    <div class="app-content">
        
    </div>
@endsection