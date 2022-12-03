@include('layouts.partials.header')

<h1>Aqui va la tabla usuarios </h1>

<!-- Aqui es el boton que manda a la vista del fromulario -->
<a href="{{url('/users/createusu')}}" class="btn btn-info" role="button" data-bs-toggle="button"><i class="fas fa-plus"></i> Agregar Datos</a>


<table class="table table-striped-columns">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">email</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $users)
       <tr>
            <th>{{$users->id}}</th>
            <th>{{$users->name}}</th>
            <th>{{$users->email}}</th>
            <th>{{$users->password}}</th>
            <th>

                <a class="btn btn-info" href="{{route('showusu',$users->id)}}">Mostrar <i class="far fa-eye"></i></a><!-- ← BOTON DE MOSTRAR (NO MOVER!!!)-->
                <a class="btn btn-primary" href="{{route('viewusu',$users->id)}}">Editar <i class="fas fa-user-edit"></i></a>

                @csrf
                @method('DELETE')
                <a class="btn btn-danger"  href="{{route('delusu', $users->id)}} ">Eliminar <i class="fas fa-users-slash"></i></a>

        </tr>      
        @empty 
            <tr>
                <th>N/A</th>
            </tr>
        @endforelse
       
    </tbody>
</table>


@include('layouts.partials.footer')