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
                                        data-category-id="{{$productos->category_id}}"
                                        data-slug="{{$productos->slug}}"
                                        data-price="{{$productos->price}}"
                                        data-description="{{$productos->description}}"
                                        data-stock="{{$productos->stock}}"
                                        data-status="{{$productos->status}}"
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

        <!-- Modal Edit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>   
                 </div>
              <form action="" method="POST" id="formUpdate">
                     @csrf
                    
                     <div class="modal-body">
                         <div class="mb-3">
                             <label for="">Nombre:</label>
                             <input type="text" class="form-control" id="txtName" name="name">
                         </div>
                         <div class="mb-3">
                            <label for="">Slug:</label>
                            <input type="text" class="form-control" id="txtSlug" name="slug">
                        </div>
                                        
                        <div class="form-group my-4">
                            <label for="">Imagen del producto:</label>
                            <input name="img" value="{{ old('img') }}" type="file" class="form-control" id="txtImg" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="">Precio:</label>
                            <input type="number" class="form-control" id="txtPrice" name="price">
                        </div>
                         <div class="mb-3">
                             <label for="">Categoria:</label>
                             <select type="text" class="form-control" id="txtCategory" name="category">
                                 @foreach($data as $categoria)
                                     <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                         <div class="mb-3">
                            <label for="">Descripción:</label>
                            <input type="text" class="form-control" id="txtDescription" name="description">
                        </div>
                        <div class="mb-3">
                            <label for="">Existencias:</label>
                            <input type="text" class="form-control" id="txtStock" name="stock">
                        </div>
                        <div class="mb-3">
                            <label for="">Estatus:</label>
                            <input type="text" class="form-control" id="txtStatus" name="status">
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
                var slug=evt.target.getAttribute('data-slug')
                var img=evt.target.getAttribute('data-img')
                var price=evt.target.getAttribute('data-price')
                var category=evt.target.getAttribute('data-category-id')
                var description=evt.target.getAttribute('data-description')
                var stock=evt.target.getAttribute('data-stock')
                var status=evt.target.getAttribute('data-status')
                console.log(id,name,slug,price,category,description,stock,status)
                document.getElementById('txtName').value = name
                document.getElementById('txtSlug').value = slug
                document.getElementById('txtImg').value = img
                document.getElementById('txtPrice').value = price
                document.getElementById('txtCategory').value = category
                document.getElementById('txtDescription').value = description
                document.getElementById('txtStock').value = stock
                document.getElementById('txtStatus').value = status
                document.getElementById('formUpdate').action="/admin/products/update/"+id

            })
        }
     }
 </script>
   
@endsection