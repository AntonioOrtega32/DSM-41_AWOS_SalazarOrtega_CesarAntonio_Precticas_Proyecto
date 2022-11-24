@include('layouts.partials.header')
       

                 
<h1>Aqui va la tabla Productos</h1>

<!-- Aqui es el boton que manda a la vista del fromulario -->
<a href="{{url('/products/createpro')}}" class="btn btn-info" role="button" data-bs-toggle="button">Agregar Datos</a>

<table class="table table-striped-columns table-bordered">
    <!-- tabla donde se muetran los datos -->
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Cap.Volumetrica</th>
            <th scope="col">No.Empaques</th>
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
            <th>{{$products->preciounitario}}</th>
            <th>{{$products->category_id}}</th>
            <th><a href="{{route('deleteProduct',$products->id)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
                <a href="#" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Editar</a></th>
            </tr>
        </tr>      
        @empty
            <tr>
                <th>N/A</th>
            </tr>
        @endforelse
       
    </tbody>
</table>



@include('layouts.partials.footer')