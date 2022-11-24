@include('layouts.partials.header')
       

<h1>Aqui va la tabla Categorias</h1>

<!-- Aqui es el boton que manda a la vista del fromulario -->
<a href="{{url('/categories/createcat')}}" class="btn btn-info" role="button" data-bs-toggle="button">Agregar Datos</a>

<table class="table table-striped-columns">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $categories)
       <tr>
            <th>{{$categories->id}}</th>
            <th>{{$categories->nombrecategoria}}</th>
            <th><a href="{{route('deleteCategory',$categories->id)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
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