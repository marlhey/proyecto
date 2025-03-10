@extends('admin.layouts.main')
@section('contenido')

    
    <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
                <div class="d-flex justify-content-between">
                    <h1 class="h3 mb-3">Categorias</h1>
                    <a href="{{ url('/admin/categories/add') }}" class="btn btn-dark">
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
                <div class="col-sm-6"><h5 class="mb-0">Listado de categorias</h5></div>
                
                <div class="container p-5" >
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $categoria)
                                <tr>
                                    <td>{{ $categoria->id}}</td>
                                    <td>{{ $categoria->name}}</td>
                                    <td>{{ $categoria->description }}</td> 
                                    <td>{{ $categoria->image }}</td> 
                                    <td>{{ $categoria->state }}</td>

                                    <td><button class="btn btn-warning btnEdit" 
                                        data-id="{{ $categoria->id }}"
                                        data-name="{{ $categoria->name }}"
                                        data-description="{{ $categoria->description }}"
                                        
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button></td>
                                    <td><form action="{{ route('categories.destroy', $categoria->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar esta categoria?');">
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>   
             </div>
          <form action="" method="POST" id="formUpdate" enctype="multipart/form-data">
                 @csrf
                
                 <div class="modal-body">
                     <div class="mb-3">
                         <label for="">Nombre:</label>
                         <input type="text" class="form-control" id="txtName" name="name">
                     </div>
                     <div class="mb-3">
                        <label for="">Descripción:</label>
                        <input type="text" class="form-control" id="txtDes" name="description">
                    </div>
                                    
                    <div class="form-group my-4">
                        <label for="">Imagen de la Categoria:</label>
                        <input name="image" value="{{ old('image') }}" type="file" class="form-control" id="txtImg" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="">Estado:</label>
                        <select name="estado" id="txtEstado" class="form-control">
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
                var name=evt.target.getAttribute('data-name')
                var description=evt.target.getAttribute('data-description')
                var image=evt.target.getAttribute('data-image')
                var state=evt.target.getAttribute('data-state')
                console.log(id,name,description,image,state)
                document.getElementById('txtName').value = name
                document.getElementById('txtDes').value = description
                document.getElementById('txtImg').value = image
                document.getElementById('txtEstado').value = state
                document.getElementById('formUpdate').action="/admin/categories/update/"+id
            })
        }
     }
 </script>
   
@endsection
