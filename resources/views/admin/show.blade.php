@extends('layouts.nav')

@section('template_title')
    {{ $admin->name ?? 'Show Admin' }}
@endsection

@section('content')

<title>Datos {{ $admin->rut }}</title>

<div class="contenedor_servicio">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2>ADMIN</h2>
                        </div>
                        <div class="float-right">
                            <a style="background-color: red; border:none;" class="btn btn-danger" href="{{ route('admins.index') }}"><i class="fas fa-home"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $admin->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $admin->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Materno:</strong>
                            {{ $admin->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $admin->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $admin->email }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $admin->contraseña }}
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
