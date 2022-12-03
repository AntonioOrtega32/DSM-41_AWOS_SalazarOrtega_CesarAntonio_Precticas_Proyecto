@include('layouts.partials.header')

<h2>Cliente: </h2>


<div class="row">
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Nombre: </strong>
            {{$clients->nombre}}
        </div>
    </div>
    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Apellido Paterno: </strong>
            {{$clients->apPaterno}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Apellido Materno: </strong>
            {{$clients->apMaterno}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Telefono: </strong>
            {{$clients->telefono}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Correo: </strong>
            {{$clients->email}}
        </div>
    </div>

    <div class="col-xs-12 col-sm col-md-12">
        <div class="form-group">
            <strong>Direccion: </strong>
            {{$clients->direccion}}
        </div>
    </div>
</div>



<div class="row">
    <div class="pull-right">
        <a class="btn btn-primary" href="{{url('/clients')}}">Volver</a>
    </div>
</div> 

@include('layouts.partials.footer')