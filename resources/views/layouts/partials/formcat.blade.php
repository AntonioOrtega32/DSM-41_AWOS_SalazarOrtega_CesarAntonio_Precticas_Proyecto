<!-- Aqui se asigna el metodo POST y la ruta de la accion! -->

<form action="{{route('createCategory')}}" method="POST">
    @csrf
      <div class="align-items-center">
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre de la categoria</label>
        <input type="text" class="form-control" name="Nomcat">
      </div>
      
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </form>