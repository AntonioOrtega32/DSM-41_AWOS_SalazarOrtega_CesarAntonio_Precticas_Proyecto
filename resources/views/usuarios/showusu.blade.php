@include('layouts.partials.header')

<h2>Usuario: </h2>


<div class="row">
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Nombre: </strong>
            {{$users->name}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Correo: </strong>
            {{$users->email}}
        </div>
    </div>

    
</div>



<div class="row">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{url('/users')}}">Volver</a>
    </div>
</div> 

@include('layouts.partials.footer')