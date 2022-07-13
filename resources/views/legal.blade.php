@extends('layouts.nav')

@section('legal')

<!-- TÍTULO DE LA PÁGINA -->

<title>Legal</title>

<!-- ----------------------- -->

<!-- CONTENEDOR POLÍTICA -->

<div class="color_fondo">

<h1 class="titulo" style="background-color: white;">POLÍTICA DE SERVICIO</h1>

<div id="politica" class="contenedor_politica">

	<h2>LOREM IPSUM</h2>
	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip"</p>

</div>

</div>


<!-- ----------------------- -->

<!-- CONTENEDOR PRIVACIDAD -->

<div class="color_fondo">

<h1 class="titulo" style="background-color: white;">PRIVACIDAD</h1>

<div id="privacidad" class="contenedor_privacidad">

	<h2>LOREM IPSUM</h2>
	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip"</p>

</div>

</div>

<!-- ----------------------- -->

<!-- CONTENEDOR TERMINOS Y CONDICIONES -->

<div class="color_fondo">

<h1 class="titulo" style="background-color: white;">TÉRMINOS Y CONDICIONES</h1>

<div id="terminosycondiciones" class="contenedor_terminosycondiciones">

	<h2>LOREM IPSUM</h2>
	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip"</p>

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