@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Descuentos</h1>
                    <a href="{{ url('/admin/discounts/add') }}" class="btn btn-dark">
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
                                        data-discount-key={{$descuentos->discount_key}}
                                        data-quantity={{$descuentos->quantity}}
                                        data-sale-id={{$descuentos->sale_id}}
                                        data-state={{$descuentos->state}}
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
                                    <td><form action="{{ route('discounts.destroy', $descuentos->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este descuento?');">
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

    
       
        <!-- Modal Edit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Descuento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>   
                 </div>
              <form action="" method="POST" id="formUpdate">
                     @csrf
                    
                     <div class="modal-body">
                         <div class="mb-3">
                             <label for="">LLave del Descuento:</label>
                             <input type="text" class="form-control" id="txtKey" name="key">
                         </div>
                         <div class="mb-3">
                            <label for="">Cantidad:</label>
                            <input type="text" class="form-control" id="txtQuantity" name="quantity">
                        </div>
                         <div class="mb-3">
                             <label for="">Venta:</label>
                             <select type="text" class="form-control" id="txtSale" name="sale">
                                 @foreach($data as $venta)
                                     <option value="{{$venta->id}}">{{$venta->id}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="mb-3">
                            <label for="">Estado:</label>
                            <select name="state" id="txtState" class="form-control">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-dark">Guardar</button>
                     </div>
                 </form>
             </div>
             </div>
         </div>
@endsection
 
@section('scripts')
 <script>
     window.onload=()=>{
        var botones = document.getElementsByClassName('btnEdit')//es un arreglo
        console.log(botones)
        for (let i = 0; i < botones.length; i++){

            botones[i].addEventListener('click',(evt)=>{
                var id=evt.target.getAttribute('data-id')
                var key=evt.target.getAttribute('data-dicount-key')
                var quantity=evt.target.getAttribute('data-quantity')
                var sale=evt.target.getAttribute('data-sale-id')
                var state=evt.target.getAttribute('data-state')
                console.log(id,key,quantity,sale,state)
                document.getElementById('txtKey').value = key
                document.getElementById('txtQuantity').value = quantity
                document.getElementById('txtSale').value = sale
                document.getElementById('txtState').value = state
                document.getElementById('formUpdate').action="/admin/discounts/update/"+id
            })
        }
     }
 </script>
   
@endsection