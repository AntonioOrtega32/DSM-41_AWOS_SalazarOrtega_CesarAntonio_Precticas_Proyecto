@include('layouts.partials.header')
       

<h1>Aqui va la tabla clientes</h1>

<a href="{{url('/clients/createcli')}}" class="btn btn-info" role="button" data-bs-toggle="button">Agregar Datos</a>
<table class="table table-striped-columns">
    <thead class="table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clients as $clients)
       <tr>
            <th>{{$clients->id}}</th>
            <th>{{$clients->nombre}}</th>
            <th>{{$clients->apPaterno}}</th>
            <th>{{$clients->apMaterno}}</th>
            <th>{{$clients->telefono}}</th>
            <th>{{$clients->email}}</th>
            <th>{{$clients->direccion}}</th>
            <th>{{$clients->password}}</th>
            <th><a href="{{route('deleteClient',$clients->id)}}" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
                <a href="#" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">Editar</a></th>
        </tr>      
        @empty
            <tr>
                <th>N/A</th>
                @endforelse
            </tr>
    </tbody>
</table>
     
@include('layouts.partials.footer')