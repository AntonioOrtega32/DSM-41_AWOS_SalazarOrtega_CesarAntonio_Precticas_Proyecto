

<form action="{{route('createUser')}}" method="POST">
    @csrf
      <div class="align-items-center">
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nom">
      </div>
      <div class="mb-3">
        <label for="Correo" class="fcorm-label">Correo</label>
        <input type="text" class="form-control" name="Email">
      </div>
      <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" name="Passw">
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </form>