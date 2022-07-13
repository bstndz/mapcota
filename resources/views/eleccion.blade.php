@extends('layouts.nav')

@section('eleccion')

<!-- COLOR FONDO -->

<div class="color_fondo">

<!-- CONTENEDOR "REGÍSTRATE" PANTALLA GRANDE -->

<h1 class="titulo">¿En qué te quieres registrar?</h1>

<form class="contenedor_registro_grande">
            <h1 id="registrate">¡¡REGÍSTRATE!!</h1>
            <div class="radio-toolbar">
              <label class="contenido">QUIERO SER UN MAPCOTA
                  <input type="radio" onclick="window.location='/formulario_mapcota'" autocomplete="off">
                  <span class="checkmark"></span>
              </label>
              <label class="contenido">QUIERO EL SERVICIO
                  <input type="radio" onclick="window.location='/formulario_servicio'" autocomplete="off">
                  <span class="checkmark"></span>
              </label>
          </div>
</form>

<!-- ----------------------- -->

<!-- CONTENEDOR "REGÍSTRATE" PANTALLA PEQUEÑA -->

<form class="contenedor_registro_pequeño">
            <h1 id="registrate">¡¡REGÍSTRATE!!</h1>
            <div class="radio-toolbar">
              <label class="contenido">QUIERO SER UN MAPCOTA
                  <input type="radio" onclick="window.location='/formulario_mapcota'">
                  <span class="checkmark"></span>
              </label>
              <label class="contenido">QUIERO EL SERVICIO
                  <input type="radio" onclick="window.location='/formulario_servicio'">
                  <span class="checkmark"></span>
              </label>
          </div>
</form>


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

</div>

<!-- ----------------------- -->

@endsection