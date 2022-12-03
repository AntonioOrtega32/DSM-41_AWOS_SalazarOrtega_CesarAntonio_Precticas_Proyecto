@include('layouts.partials.header')

<h2>Producto: </h2>


<div class="row">
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Producto: </strong>
            {{$products->producto}}
        </div>
    </div>
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Capacidad Volumetrica: </strong>
            {{$products->capvolumetrica}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Numero de empaques: </strong>
            {{$products->numempaques}}
        </div>
    </div>
 
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Precio: </strong>
            {{$products->preciounitario}}
        </div>
    </div>

</div>



<div class="row">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{url('/products')}}">Volver</a>
    </div>
</div> 

@include('layouts.partials.footer')