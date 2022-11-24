

<!-- Aqui se asigna el metodo POST y la ruta de la accion! -->
<form action="{{route('createProduct')}}" method="POST">
  @csrf
  <div class="align-items-center">
        
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre Producto</label>
        <input type="text" class="form-control" name="Prod">
      </div>
      <div class="mb-3">
        <label for="Apaterno" class="form-label">Capcidad Volumetrica</label>
        <input type="text" class="form-control" name="Vol">
      </div>
      <div class="mb-3">
        <label for="Amaterno" class="fcorm-label">Numero de empaques</label>
        <input type="text" class="form-control" name="Empaque">
      </div>
      <div class="mb-3">
        <label for="Teleono" class="fcorm-label">Precio Unitario</label>
        <input type="text" class="form-control" name="Pres">
      </div>
      <div class="mb-3">
        <label for="Categoria" class="fcorm-label">Categoria</label>
        <select name="cat" class="form-select" aria-label="Default select example">
          <option selected>Selecciona una categoria</option>
          @foreach ($categoria as $categoria)        
          <option value="{{$categoria->id}}">{{$categoria -> nombrecategoria}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </div> 
    </form>