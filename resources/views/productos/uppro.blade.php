@include('layouts.partials.header')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar producto: </h2>
        </div>
        <div class="pull-right"> 
            <a class="btn btn-primary" href="{{url('/products')}}"> Volver </a>
        </div>
    </div>
</div>


<form action="{{route('updateProduct')}}" method="POST">
  @csrf
  <input type="hidden" name="product_id" value="{{$products->id}}">
  <div class="align-items-center">
        
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre Producto</label>
        <input type="text" class="form-control" value="{{$products->producto}}" name="Prod">
      </div>
      <div class="mb-3">
        <label for="Apaterno" class="form-label">Capcidad Volumetrica</label>
        <input type="text" class="form-control" name="Vol"  value="{{$products->capvolumetrica}}">
      </div>
      <div class="mb-3">
        <label for="Amaterno" class="fcorm-label">Numero de empaques</label>
        <input type="text" class="form-control" name="Empaque"  value="{{$products->numempaques}}">
      </div>
      <div class="mb-3">
        <label for="Teleono" class="fcorm-label">Precio Unitario</label>
        <input type="text" class="form-control" name="Pres"  value="{{$products->preciounitario}}">
      </div>
      <div class="mb-3">
        <label for="Categoria" class="fcorm-label">Categoria</label>
        <select name="cat" class="form-select" aria-label="Default select example">
          <option selected>Selecciona una categoria</option>
             @foreach ($categorias as $categorias)
                 
               
          <option value="{{$categorias->id}}">{{$categorias->nombrecategoria}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>  
    </form> 



@include('layouts.partials.footer')