@include('layouts.partials.header')
       

<h1>Aqui va la tabla Categorias</h1>

<!-- Aqui es el boton que manda a la vista del fromulario -->
<a href="{{url('/categories/createcat')}}" class="btn btn-info" role="button" data-bs-toggle="button"><i class="fas fa-plus"></i> Agregar Datos</a>

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
            <th>
 
                <a class="btn btn-info" href="{{route('showcat',$categories->id)}}">Mostrar <i class="far fa-eye"></i></a><!-- ← BOTON DE MOSTRAR (NO MOVER!!!)-->
                <a class="btn btn-primary" href="{{route('viewcat',$categories->id)}}">Editar <i class="far fa-edit"></i></a>

                @csrf
                @method('DELETE')
                <a class="btn btn-danger" href="{{route('delcat', $categories->id)}}">Eliminar <i class="fas fa-trash-alt"></i></a>
                
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