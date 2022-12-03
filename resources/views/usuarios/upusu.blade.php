@include('layouts.partials.header')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Usuario: </h2>
        </div>
        <div class="pull-right"> 
            <a class="btn btn-primary" href="{{url('/users')}}"> Volver </a>
        </div>
    </div>
  </div>
  


<form action="{{route('updateUser')}}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{$user->id}}">

      <div class="align-items-center">
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nom"value="{{$user->name}}">
      </div>
      <div class="mb-3">
        <label for="Correo" class="fcorm-label">Correo</label>
        <input type="text" class="form-control" name="Email" value="{{$user->email}}">
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" name="Passw" value="{{$user->password}}">
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </form>


@include('layouts.partials.footer')