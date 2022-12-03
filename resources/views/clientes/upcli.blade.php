@include('layouts.partials.header')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Editar cliente: </h2>
      </div>
      <div class="pull-right"> 
          <a class="btn btn-primary" href="{{url('/clients')}}"> Volver </a>
      </div>
  </div>
</div>


<!-- Aqui se asigna el metodo POST y la ruta de la accion! -->

<form action="{{route('updateClient')}}" method="POST">
  @csrf
  <input type="hidden" name="client_id" value="{{$client->id}}">
    <div class="align-items-center">
      <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="Nom" value="{{$client->nombre}}">
    </div>
    <div class="mb-3">
      <label for="Apaterno" class="form-label">Primer Apellido</label>
      <input type="text" class="form-control" name="Apat" value="{{$client->apPaterno}}">
    </div>
    <div class="mb-3"
      <label for="Amaterno" class="fcorm-label">Segundo apellido</label>
      <input type="text" class="form-control" name="Amat" value="{{$client->apMaterno}}">
    </div>
    <div class="mb-3">
      <label for="Teleono" class="fcorm-label">Telefono</label>
      <input type="text" class="form-control" name="Tel" value="{{$client->telefono}}">
    </div>
    <div class="mb-3">
      <label for="Correo" class="fcorm-label">Correo</label>
      <input type="text" class="form-control" name="Email" value="{{$client->email}}">
    </div>
    <div class="mb-3">
      <label for="Direccion" class="fcorm-label">Direccion</label>
      <input type="text" class="form-control" name="Dir" value="{{$client->direccion}}">
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" class="form-control" name="Passw" value="{{$client->password}}">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
  </form> 

  @include('layouts.partials.footer')