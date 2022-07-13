@extends('layouts.nav')

@section('servicios')

<!-- TÍTULO DE LA PÁGINA -->

<title>Servicios</title>

<!-- ----------------------- -->

<!-- CONTENEDOR SERVICIOS -->

<div class="color_fondo">

<h1 class="titulo" style="background-color: white;">SERVICIOS</h1>

<div class="contenedor_descripcion_servicio">
  <div class="columna_servicio1">
    <img src="{{asset('img/iconos servicios/01.png')}}">
  </div>
  <div class="columna_servicio2">
  	<h2>PASEOS</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"</p>
  </div>
</div>

<div class="contenedor_descripcion_servicio">
  <div class="columna_servicio1">
    <img src="{{asset('img/iconos servicios/02.png')}}">
  </div>
  <div class="columna_servicio2">
  	<h2>BAÑOS Y PELUQUERÍA</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"</p>
  </div>
</div>

<div class="contenedor_descripcion_servicio">
  <div class="columna_servicio1">
    <img src="{{asset('img/iconos servicios/03.png')}}">
  </div>
  <div class="columna_servicio2">
  	<h2>ALOJAMIENTO</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"</p>
  </div>
</div>

<div class="contenedor_descripcion_servicio">
  <div class="columna_servicio1">
    <img src="{{asset('img/iconos servicios/04.png')}}">
  </div>
  <div class="columna_servicio2">
    <h2>TRASLADO</h2>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse"</p>
  </div>
</div>

</div>

<!-- ----------------------- -->

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