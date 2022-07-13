@extends('layouts.nav')

@section('content')

<title>Editar mapcota</title>

<div class="contenedor_servicio">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <h1 class="texto_foto_servicio">EDITAR DATOS MAPCOTA</h1>
            <form class="formulario_mapcota" method="POST" action="{{ route('mapcotas.update', $mapcota->id) }}"  role="form" enctype="multipart/form-data">
                <h1 class="titulo_mapcota">FORMULARIO</h1>
                {{ method_field('PATCH') }}
                @csrf

                @include('mapcota.form')

            </form>
            
            <div class="contenedor_volver">
                <form action="{{ route('mapcotas.index') }}">
                  <button style="background-color: red;" id="submit_general" class="boton_inicio"><i class="fas fa-home"></i> Volver atrás</button>
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
