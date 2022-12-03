@include('layouts.partials.header')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Editar categoria: </h2>
      </div>
      <div class="pull-right"> 
          <a class="btn btn-primary" href="{{url('/categories')}}"> Volver </a>
      </div>
  </div>
</div>


<form action="{{route('updateCategory')}}" method="POST">
    @csrf
    <input type="hidden" name="category_id" value="{{$category->id}}">
      <div class="align-items-center">
        <div class="mb-3">
        <label for="Nombre" class="form-label">Nombre de la categoria</label>
        <input type="text" class="form-control" name="Nomcat" value="{{$category->nombrecategoria}}">
      </div>
      
      <button type="submit" class="btn btn-success">Enviar</button>
    </div>
    </form>