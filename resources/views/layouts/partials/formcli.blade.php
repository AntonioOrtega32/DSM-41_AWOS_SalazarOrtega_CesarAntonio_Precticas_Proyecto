
<!-- Aqui se asigna el metodo POST y la ruta de la accion! -->

<form action="{{route('createClient')}}" method="POST">
  @csrf
    <div class="align-items-center">
      <div class="mb-3">
      <label for="Nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="Nom">
    </div>
    <div class="mb-3">
      <label for="Apaterno" class="form-label">Primer Apellido</label>
      <input type="text" class="form-control" name="Apat">
    </div>
    <div class="mb-3">
      <label for="Amaterno" class="fcorm-label">Segundo apellido</label>
      <input type="text" class="form-control" name="Amat">
    </div>
    <div class="mb-3">
      <label for="Teleono" class="fcorm-label">Telefono</label>
      <input type="text" class="form-control" name="Tel">
    </div>
    <div class="mb-3">
      <label for="Correo" class="fcorm-label">Correo</label>
      <input type="text" class="form-control" name="Email">
    </div>
    <div class="mb-3">
      <label for="Direccion" class="fcorm-label">Direccion</label>
      <input type="text" class="form-control" name="Dir">
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" class="form-control" name="Passw">
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
  </form>