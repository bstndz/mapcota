@extends('layouts.nav')


@section('content')

<title>Formulario admin</title>

<div class="contenedor_servicio">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <h1 class="texto_foto_servicio">AGREGAR ADMIN</h1>

            <form class="formulario_servicio" method="POST" action="{{ route('admins.store') }}"  role="form" enctype="multipart/form-data">
                <h1 class="titulo_mapcota">FORMULARIO</h1>
                @csrf

                @include('admin.form')

            </form>

            <div class="contenedor_volver">
                <form action="{{ route('admins.index') }}">
                  <button style="background-color: red;" id="submit_general" class="boton_inicio"><i class="fas fa-home"></i> Volver atrás</button>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- FOOTER -->

<footer>
<div class="contenedor_footer">
    
<div class="contenedor_logo_footer">
<img style="padding-top: 20px" id="logofooter" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}">
</div>

</div>
</footer>

<!-- ----------------------- -->

@endsection
