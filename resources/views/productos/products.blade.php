@include('layouts.partials.header')
       
 
                 
<h1>Aqui va la tabla Productos</h1>

<!-- Aqui es el boton que manda a la vista del fromulario -->
<a href="{{url('/products/createpro')}}" class="btn btn-info" role="button" data-bs-toggle="button"><i class="fas fa-plus"></i> Agregar Datos</a>

<table class="table table-striped-columns table-bordered">
    <!-- tabla donde se muetran los datos -->
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Cap.Volumetrica</th>
            <th scope="col">No.Empaques</th>
            <th scope="col">Imagen</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $products)
       <tr>
            <th>{{$products->id}}</th>
            <th>{{$products->producto}}</th>
            <th>{{$products->capvolumetrica}}</th>
            <th>{{$products->numempaques}}</th>
                <th><img src="/img/post/{{$products->imagen}}" width="150px"></th>           
            <th>{{$products->preciounitario}}</th>
            <th>{{$products->category_id}}</th>
            <th>
                <a class="btn btn-info" href="{{route('showpro',$products->id)}}">Mostrar <i class="far fa-eye"></i></a><!-- ← BOTON DE MOSTRAR (NO MOVER!!!)-->
                <a class="btn btn-primary" href="{{route('viewpro',$products->id)}}">Editar <i class="far fa-edit"></i></a>

                @csrf
                @method('DELETE')
                <a class="btn btn-danger" href="{{route('delpro', $products->id)}}">Eliminar <i class="fas fa-trash-alt"></i></a>
                
                
              </th>
            </form>
            </tr>    
        @empty
            <tr>
                <th>N/A</th>
                @endforelse
            </tr>
       
       
    </tbody>
</table>

 

@include('layouts.partials.footer')