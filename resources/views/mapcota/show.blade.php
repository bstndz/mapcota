@extends('layouts.nav')

@section('content')

<title>Datos {{ $mapcota->rut }}</title>

<div class="contenedor_servicio">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h2>MAPCOTA</h2>
                        </div>
                        <div class="float-right">
                            <a style="background-color: red; border:none;" class="btn btn-danger" href="{{ route('mapcotas.index') }}"><i class="fas fa-home"></i> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $mapcota->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $mapcota->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $mapcota->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong>Rut:</strong>
                            {{ $mapcota->rut }}
                        </div>
                        <div class="form-group">
                            <strong>Nacimiento:</strong>
                            {{ $mapcota->nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $mapcota->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $mapcota->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $mapcota->especialidad }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $mapcota->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <img src="{{ asset('storage').'/'.$mapcota->foto }}" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Video:</strong>
                            {{ $mapcota->video }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $mapcota->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $mapcota->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $mapcota->contraseña }}
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
