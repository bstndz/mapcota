@extends('layouts.nav')

@section('content')

<title>Datos {{ $cliente->rut }}</title>

<div class="contenedor_servicio">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2>CLIENTE</h2>
                        </div>
                        <div class="float-right">
                            <a style="background-color: red; border:none;" class="btn btn-danger" href="{{ route('clientes.index') }}"><i class="fas fa-home"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cliente->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $cliente->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $cliente->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $cliente->email }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $cliente->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>

<!-- FOOTER -->

<footer>
<div class="contenedor_footer">


<div class="contenedor_logo_footer">
<img style="margin: 50px" id="logofooter" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}">
</div>

</div>
</footer>

<!-- ----------------------- -->

@endsection
