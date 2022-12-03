@include('layouts.partials.header')

<h2>Categoria: </h2>


<div class="row">
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Nombre: </strong>
            {{$categories->nombrecategoria}}
        </div>
    </div>
  
</div>



<div class="row">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{url('/categories')}}">Volver</a>
    </div>
</div> 

@include('layouts.partials.footer')