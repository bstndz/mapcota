@extends('layouts.nav')

@section('content')

<title>Formulario mapcota</title>
<div class="contenedor_servicio">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <h1 class="texto_foto_servicio">¡QUIERO SER MAPCOTA!</h1>

            <form class="formulario_mapcota" method="POST" action="{{ route('mapcotas.store') }}"  role="form" enctype="multipart/form-data">
                <h1 class="titulo_mapcota">REGISTRAME</h1>
                @csrf

                @include('mapcota.form')

            </form>
            <div class="contenedor_volver">
                <form action="/index">
                  <button style="background-color: red;" id="submit_general" class="boton_inicio"><i class="fas fa-home"></i> Volver a la página principal</button>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- FOOTER -->

<footer>
<div class="contenedor_footer">
    <div class="contenedor_col">
      <div class="columna_footer">
        <h2 id="titulocolumna">NOSOTROS</h2>
        <a href="/index#quienes_somos"><p>¿Quiénes somos?</p></a>
        <a href="/formulario_mapcota"><p>Hazte Mapcota</p></a>
        <a href="/preguntas"><p>Preguntas frecuentes</p></a>
        <a href="/cobertura"><p>Cobertura de servicio</p></a>
    </div>

    <div class="columna_footer">
        <h2 id="titulocolumna">CONTÁCTANOS</h2>
        <p><i class="fas fa-envelope"></i> contacto@mapcota.cl</p>
        <p><i class="fab fa-whatsapp"></i> +569 40 87 69 22</p>
        <p><i style="color:white" class="fab fa-twitter"></i> / <i style="color:white" class="fab fa-facebook"></i> / <i style="color:white" class="fab fa-instagram"></i> MAPCOTA</p>
    </div>

    <div class="columna_footer">
        <h2 id="titulocolumna">LEGAL</h2>
        <a href="/legal"><p>Política Mapcota</p></a>
        <a href="/legal"><p>Aviso de privacidad</p></a>
        <a href="/legal"><p>Términos y condiciones</p></a>
    </div>
</div>


<div class="contenedor_logo_footer">
<img id="logofooter" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}">
</div>

</div>
</footer>

<!-- ----------------------- -->
@endsection
